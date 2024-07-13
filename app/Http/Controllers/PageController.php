<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller
{
    //
    public function index($id, Request $request)
    {
        if (view()->exists($id)) {
           
            $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
            $subtotal = $cartItems->sum(function($item) {
                return $item->product->price * $item->quantity;
            });


            $products = Product::all();

            foreach ($products as $product) {
                $reviews = Review::where('product_id', $product->id)->get();
                $product->reviews = $reviews;
                $product->averageRating = $reviews->avg('rating');
            }

            $latestProduct = Product::orderBy('created_at', 'desc')->get();

            $randomProducts = Product::with(['reviews'])->inRandomOrder()->limit(4)->get();

        
            $reviews = Review::all(); 
            $averageRating = $reviews->avg('rating');
            $roundedRating = min(5, round($averageRating));
            $user=User::all();
            return view($id,compact('user','products', 'cartItems', 'latestProduct','randomProducts','reviews','roundedRating'));
        }else{
               
            $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
            $subtotal = $cartItems->sum(function($item) {
                return $item->product->price * $item->quantity;
            });

            return view('404',compact('cartItems'));

        }
    }
    

}


