<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // update
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
    
        return view('cart', compact('cartItems', 'subtotal'));
    }
      // store
      public function store(Request $request)
      {
          $request->validate([
              'product_id' => 'required|exists:products,id',
              'quantity' => 'required|numeric|min:1',
          ]);
      
          $userId = Auth::id();
      
          if (!$userId) {
              return redirect()->route('login');
          }
      
          $cartItem = Cart::updateOrCreate(
            [
                'user_id' =>$userId,
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => DB::raw('quantity + ' . $request->quantity)
            ]
        );
      
          $cartItems = Cart::where('user_id', $userId)->get();
          session(['cart' => $cartItems]);
      
          return redirect()->route('cart.index')->with('success_message', 'Product added to cart successfully!');
      }

      public function updateCart(Request $request)
      {
          $request->validate([
              'product_id' => 'required|integer',
              'quantity' => 'required|integer|min:1'
          ]);
          
          $userId = Auth::id();
          $cartItem = Cart::where('user_id', $userId)->where('id', $request->product_id);
          $cartItem->update(['quantity' => $request->quantity]);
      
          return response()->json(['message' => 'Cart updated successfully!', 'cartItem' => $cartItem]);
      }
     
     
      // update
      public function update(Request $request)
      {
         
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
        $userId = Auth::id();
        $cartItem = Cart::where('user_id', $userId)->where('id', $request->product_id)->firstOrFail();
        $cartItem->update(['quantity' => $request->quantity]);
      
              return redirect()->route('cart.index')->with('success_message', 'تم تحديث كمية المنتج بنجاح!');
          
      }
      
      
      
      // destroy
    public function destroy(Cart $cartItem)
    {
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success_message', 'Item removed from cart successfully!');
    }
    public function addToCart(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $userId = Auth::id();

    if (!$userId) {
        return redirect()->route('login');
    }

    $cartItem = Cart::updateOrCreate(
        ['user_id' => $userId, 'product_id' => $request->product_id],
        ['quantity' => DB::raw('quantity + ' . $request->quantity)]
    );
    
    $cartItems = Cart::where('user_id', $userId)->get();
    session(['cart' => $cartItems]);

    return response()->json(['message' => 'Product added to cart successfully.']);
}

    

}
