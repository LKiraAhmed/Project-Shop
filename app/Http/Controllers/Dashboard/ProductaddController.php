<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Catigory;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class ProductaddController extends Controller
{
    //
    public function show (){
        $categories = Catigory::all();  
        $product = Product::all();
        return view("dashboard.product-list", compact("categories","product"));
    }
    public function index(){
        $categories = Catigory::all();  
        return view('dashboard.addproduct',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'required',
            'description' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'catigorie_id' => 'nullable|exists:categories,id', 
        ]);
    
        $imagePath = $request->file('image')->store('product_images', 'public');
    
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->image = $imagePath;
        $product->size = $request->size;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        if($request->has('catigorie_id')){
            $product->catigorie_id = $request->catigorie_id; 
        }
        $product->save();
        $products=Product::all();
        return view('dashboard.product-list',compact('products'))->with('success_message', 'Product added successfully!');
    }
    public function edit($id){
        $product = Product::findOrFail($id);
        $categories = Catigory::all();  
        return view('dashboard.updateproduct',compact('product','categories'));
    }
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'required',
            'description' => 'required',
            'size' => 'required',
            'catigorie_id' => 'nullable|exists:categories,id',
            'quantity' => 'required|integer|min:0',
        ]);
    
        $product = Product::findOrFail($id);
    
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->quantity = $request->quantity;
    
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image); // Delete old image
            $imagePath = $request->file('image')->store('product_images', 'public'); // Store new image
            $product->image = $imagePath;
        }
    
        if ($request->has('catigorie_id')) {
            $product->catigorie_id = $request->catigorie_id;
        }
    
        $product->save();
    
        $products = Product::all();
        Session::put('products', $products);
        return redirect()->route('dashboard.show')->with([
            'success_message', 'Product updated successfully!',
            $products
        ]);
    }
    
    
    // destroy
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $product->delete();
            return response()->json(['success' => 'Product deleted successfully!']);
        } else {
            return response()->json(['error' => 'Product not found!'], 404);
        }
    }
    

}
