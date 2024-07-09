<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       

        // 
        $products = Product::with(['reviews'])->select('*')->get();
        $latestProduct = Product::orderBy('created_at', 'desc')->get();
        $mostViewedProducts = Product::orderByDesc('views_count')->limit(10)->get();
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
        $randomProducts = Product::inRandomOrder()->take(3)->get();
        $images = DB::table('products')->select('image')->get();
        $encodedImages = [];
        foreach ($images as $image) {
            $encodedImage = base64_encode($image->image); 
            $encodedImages[] = $encodedImage;
        }
        $reviews = Review::all(); 
        $averageRating = $reviews->avg('rating');
        $roundedRating = min(5, round($averageRating));
        //Return view data
        return view('index', compact('products', 'latestProduct', 'mostViewedProducts', 'cartItems','randomProducts','encodedImages','reviews','roundedRating'));
    }


    public function show(){
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

     

        foreach ($products as $product) {
            $product->increment('views_count');
        }
        $reviews = Review::all(); 
        $averageRating = $reviews->avg('rating');
        $roundedRating = min(5, round($averageRating));
        $user=User::all();
        return view('shop-3-grid',compact('user','products', 'cartItems','reviews','roundedRating'));
    }

    public function checkout(){
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

      

        foreach ($products as $product) {
            $product->increment('views_count');
        }
        $reviews = Review::all(); 
        $averageRating = $reviews->avg('rating');
        $roundedRating = min(5, round($averageRating));
        $user=User::all();
        return view('checkout',compact('user','products', 'cartItems','reviews','roundedRating'));
    }
    public function contact(){
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

    

        foreach ($products as $product) {
            $product->increment('views_count');
        }
        $reviews = Review::all(); 
        $averageRating = $reviews->avg('rating');
        $roundedRating = min(5, round($averageRating));
        $user=User::all();
        return view('contact',compact('user','products', 'cartItems','reviews','roundedRating'));
    }
    public function aboutus(){
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


        foreach ($products as $product) {
            $product->increment('views_count');
        }
        $reviews = Review::all(); 
        $averageRating = $reviews->avg('rating');
        $roundedRating = min(5, round($averageRating));
        $user=User::all();
        return view('about-us',compact('user','products', 'cartItems','reviews','roundedRating'));
    }

}
