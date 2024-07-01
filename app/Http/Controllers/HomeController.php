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
        $emailCookie = $request->cookie('email');

        if ($emailCookie) {
            $user = User::where('email', $emailCookie)->first();

            if ($user) {
                $cartItems = Cart::where('user_id', $user->id)->with('product')->get();
                $subtotal = $cartItems->sum(function ($item) {
                    return $item->product->price * $item->quantity;
                });

                $products = Product::all();

                foreach ($products as $product) {
                    $reviews = Review::where('product_id', $product->id)->get();
                    $product->reviews = $reviews;
                    $product->averageRating = $reviews->avg('rating');
                    
                 
                }
                foreach ($products as $product) {
                    $mostViewedProduct = Product::find($product->id);
                    if ($mostViewedProduct) {
                        $mostViewedProduct->views_count += 1;
                        $mostViewedProduct->save();
                    }
                }
                $latestProduct = Product::orderBy('created_at', 'desc')->get();
$images = DB::table('products')->select('image')->get();
$encodedImages = [];

foreach ($images as $image) {
    $encodedImage = base64_encode($image->image);
    $encodedImages[] = $encodedImage;
}

                $mostViewedProducts = Product::orderByDesc('views_count')->get();
                $randomProducts = Product::inRandomOrder()->take(3)->get();

                return view('index', compact('products', 'cartItems','latestProduct', 'mostViewedProducts','randomProducts','images'));
            }
        }

        // 
        $products = Product::all();
        $latestProduct = Product::orderBy('created_at', 'desc')->get();
        $mostViewedProducts = Product::orderBy('views_count', 'desc')->get(); //      
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
}
