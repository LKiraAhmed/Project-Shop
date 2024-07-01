<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
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
       $cartItems=Cart::find($request->id);
       if($cartItems){
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);
    
        $userId = Auth::id();
    
        if (!$userId) {
            return redirect()->route('login')->with('error_message', 'Please login to add products to cart.');
        }
    
        $existingCartItem = Cart::where('user_id', $userId)->where('product_id', $request->product_id)->first();
    
        if ($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + $request->quantity
            ]);
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }
    
        $cartItems = Cart::where('user_id', $userId)->get();
        session(['cart' => $cartItems]);
       }else{
        return redirect()->route('login')->with('error_message', 'Please login to add products to cart.');
    }

    return redirect()->route('cart.index')->with('success_message', 'Product added to cart successfully!');
      }
      // update
      public function update(Request $request)
      {
          $request->validate([
              'product_id' => 'required|array',
              'product_id.*' => 'required|exists:products,id',
              'quantity' => 'required|array',
              'quantity.*' => 'required|integer|min:1',
          ]);
      
          foreach ($request->product_id as $key => $productId) {
              $cartItem = Cart::where('product_id', $productId)->firstOrFail();
              $cartItem->update([
                  'quantity' => $request->quantity[$key],
              ]);
          }
      
          return redirect()->route('cart.index')->with('success_message', 'Cart items updated successfully.');
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
            'quantity' => 'required',
        ]);
    
        $userId = Auth::id();
    
        if (!$userId) {
            return response()->json(['error' => 'Please login to add products to cart.'], 401);
        }
    
        $existingCartItem = Cart::where('user_id', $userId)
                                ->where('product_id', $request->product_id)
                                ->first();
    
        if ($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + $request->quantity
            ]);
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }
    
        $cartItems = Cart::where('user_id', $userId)->get();
        session(['cart' => $cartItems]);
    
        return response()->json(['message' => 'Product added to cart successfully.']);
    }
    

}
