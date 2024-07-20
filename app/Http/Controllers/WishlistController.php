<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class WishlistController extends Controller
{
    //
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        $wishlistItems = Wishlist::where('user_id', Auth::id())->with('product')->get();
        return view('wishlist', compact('wishlistItems','cartItems'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
        ]);

        Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('wishlist.index')->with('success_message', 'Product added to wishlist!');
    }
    public function destroy($id)
    {
        $wishlistItem = Wishlist::where('user_id', Auth::id())->where('product_id', $id)->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()->with('success_message', 'Product removed from wishlist!');
        }

        return redirect()->back()->with('error_message', 'Product not found in wishlist!');
    }
    public function addwishlist(Request $request){
        $rules = [
            'product_id' => 'required|exists:products,id',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 422);
        }
        $userId=$request->user_id;
        if(!$userId){
            return response()->json(['error' => 'Unauthorized. Please login.'], 401);
        }
        

        $wishlist= Wishlist::create([
            'user_id' => $userId,
            'product_id' => $request->product_id,
        ]);     

        if($wishlist){
            try {
                if (!$wishlist->save()) {
                    throw new \Exception('Failed to save wishlist item.');
                }
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }        
         }else{
            $wishlist=new Wishlist;
            $wishlist->user_id=$userId;
            $wishlist->product_id= $request->product_id;
            try {
                if (!$wishlist->save()) {
                    throw new \Exception('Failed to save wishlist item.');
                }
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }     
        
        }
        return response()->json(['message' => 'Product added to wishlist successfully.', 'wishlist' => $wishlist]);

    }
    

}
