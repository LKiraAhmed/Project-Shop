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

            $mostViewedProducts = Product::orderByDesc('views_count')->limit(10)->get();
            $randomProducts = Product::inRandomOrder()->take(3)->get();

            foreach ($products as $product) {
                $product->increment('views_count');
            }
            $reviews = Review::all(); 
            $averageRating = $reviews->avg('rating');
            $roundedRating = min(5, round($averageRating));
            $user=User::all();
            return view($id, compact('user','products', 'cartItems', 'latestProduct', 'mostViewedProducts','randomProducts','reviews','roundedRating'));
        } else {
            return view('404');
        }
    }
    

}

