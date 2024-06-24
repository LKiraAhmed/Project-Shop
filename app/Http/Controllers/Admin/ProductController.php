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
    public function showLatestProduct()
    {   
     $latestProduct = Product::orderBy('created_at', 'desc')->first();

    $otherProducts = Product::where('id', '!=', $latestProduct->id)->orderBy('created_at', 'desc')->get();

    $reviews = Review::where('product_id', $latestProduct->id)->select('*')->get();

    $averageRating = $reviews->avg('rating');
    $roundedRating = min(5, round($averageRating));

    return view('index', compact('latestProduct', 'otherProducts', 'reviews', 'roundedRating'));
       }

       //showMostViewedProducts
       public function showMostViewedProducts()
       {
    $mostViewedProducts = Product::withCount('views') ->orderByDesc('views_count')  ->get();

    return view('most-viewed-products', compact('mostViewedProducts'));
}


    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')->store('product_images', 'public');

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->image = $imagePath;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success_message', 'Product added successfully!');
    }

   

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image);
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image = $imagePath;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success_message', 'Product updated successfully!');
    }
    // destroy
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success_message', 'Product deleted successfully!');
    }


 
  
}
