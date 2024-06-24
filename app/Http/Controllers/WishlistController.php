<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
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
            'product_id' => 'required|exists:products,id',
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
}
