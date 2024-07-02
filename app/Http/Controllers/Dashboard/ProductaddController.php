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
use Illuminate\Support\Facades\File;

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

        $imagePath = time().'.'.$request->image->extension();
        $request->image->move(public_path('allFiels'), $imagePath);

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
            'image' => 'nullable|image',
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
        if ($request->image){
            $oldImagePath = public_path('allFiels/'. $product->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $imagePath = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('allFiels'), $imagePath);
            $product->image = $imagePath;
        }  
        
    
        if ($request->has('catigorie_id')) {
            $product->catigorie_id = $request->catigorie_id;
        }
    
        $product->save();
    
        return redirect()->route('dashboard.show')->with('success_message', 'Product updated successfully!');
    }
    
    
    // destroy
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            $currentImagePath = public_path('allFiels/' . $product->image);
            if (file_exists($currentImagePath)) {
                unlink($currentImagePath);
            }
            $product->delete();
            return response()->json(['success' => 'Product deleted successfully!']);
        } else {
            return response()->json(['error' => 'Product not found!'], 404);
        }
    }
    

}
