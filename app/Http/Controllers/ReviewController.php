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
            'product_id' => 'required', 
            'rating' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
    
        $user_id =$request->user_id;
    
      
    
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
