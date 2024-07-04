<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catigory;
class CategoryController extends Controller
{
    //
    public function add(){
        return view('dashboard.new-category');
    }
    public function index(){
        $categories = Catigory::all();
        return view("dashboard.category-list",compact("categories"));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $category = Catigory::create([
            'name'=>$request->name
        ]);
        return redirect()->route('category.index')->with('success','done create');
    
    }
}
