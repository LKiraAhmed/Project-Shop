<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::all(); 
        return view('single-product', compact('reviews'));
    }
    // store reviews
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id', 
            'rating' => 'required|integer|between:1,5',
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:1500',
        ]);
    
        $user_id = Auth::id();
    
        if ($user_id === null) {
            return redirect()->route('login')->with('error', 'You need to be logged in to submit a review.');
        }
    
        $review = new Review();
        $review->product_id = $request->product_id;
        $review->user_id = $user_id;
        $review->rating = $request->rating;
        $review->title = $request->title;
        $review->body = $request->body;
        $review->save();
    
        return redirect()->route('products.single', $request->product_id)->with('success', 'Review submitted successfully!');
    }
    

}
