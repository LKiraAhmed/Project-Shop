<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Review;

class ProductController extends Controller
{
    // index
    public function index($id)
    {
        $products = Product::findOrFail($id);
        $randomProducts = Product::with('reviews')->inRandomOrder()->limit(4)->get();
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        
        $reviews = Review::where('product_id', $id)->get();
        $averageRating = $reviews->avg('rating');
        $roundedRating = min(5, round($averageRating));
        
        foreach ($randomProducts as $randomProduct) {
            $randomProductReviews = $randomProduct->reviews;
            $randomProduct->averageRating = $randomProductReviews->avg('rating');
        }
        
        return view('single-product', compact('products', 'randomProducts', 'cartItems', 'reviews','roundedRating'));
    }
          // search
    public function search(Request $request){
        $query = $request->input('search');
        $products = null;
        if ($query) {
            $products = Product::where('name', 'LIKE', "%{$query}%")
                                ->orWhere('description', 'LIKE', "%{$query}%")
                                ->get(); 
        }
    
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        return view('page-search',compact('products','cartItems'));
    }
    //showLatestProduct
 



 
  
}
