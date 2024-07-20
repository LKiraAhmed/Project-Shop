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

        // echo $request->product_id;
        
        $cart= new Cart();
        $userId=$request->user_id;
        if (!$userId) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }
        $cart->create([
            'user_id'=>$userId,
            'product_id'=>$request->product_id,
            'quantity'=>$request->quantity
        ]);  $cart= new Cart();
        $userId=$request->user_id;
        if (!$userId) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        $cart->create([
            'user_id'=>$userId,
            'product_id'=>$request->product_id,
            'quantity'=>$request->quantity
        ]);
        
        // Return response
        return response()->json(['message' => 'Product added to cart successfully.']);
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
              'quantity' => 'required|integer|min:1'
          ];
          $validator = Validator::make($request->all(), $rules);

          if ($validator->fails()) {
              return response()->json(['error' => $validator->messages()]);
          }
          $userId = Auth::id();
      
          if (!$userId) {
              return response()->json(['error' => 'Unauthorized. Please login.']);
          }
       
          $cart=Cart::where('product_id',$request->product_id)->update([
            'quantity' =>$request->quantity
          ]);
      
          return response()->json(['message' => 'Cart updated successfully!']);
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
