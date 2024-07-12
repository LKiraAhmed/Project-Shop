<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    //addToCart
    public function addToCart(Request $request)
    {
        $rules = [
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ];
        
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 422);
        }
        
    
        $userId = Auth::id();
    
        if (!$userId) {

            return route('login');
        }
      

        $cartItem = Cart::where('user_id', $userId)
                        ->where('product_id', $request->product_id)
                        ->first();
    
        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            $cartItem = new Cart();
            $cartItem->user_id = $userId;
            $cartItem->product_id = $request->product_id;
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
        }
    
        return response()->json(['message' => 'Product added to cart successfully.', 'cart_item' => $cartItem]);
    }
    
    
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
          $rules=[
              'product_id' => 'required|integer|exists:cart,id', 
              'quantity' => 'required|integer|min:1'
          ];
          $validator = Validator::make($request->all(), $rules);

          if ($validator->fails()) {
              return response()->json(['error' => $validator->messages()], 422);
          }
          $userId = Auth::id();
      
          if (!$userId) {
              return response()->json(['error' => 'Unauthorized. Please login.'], 401);
          }
      
          $cartItem = Cart::where('user_id', $userId)
                          ->where('id', $request->product_id)
                          ->first();
      
          if (!$cartItem) {
              return response()->json(['error' => 'Cart item not found.'], 404);
          }
      
          $cartItem->quantity = $request->quantity;
          $cartItem->save();
      
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
    
 

    

}
