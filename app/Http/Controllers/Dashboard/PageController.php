<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index($page, Request $request)
    {
        $page = pathinfo($page, PATHINFO_FILENAME);
        $users=User::all();
        $viewPath = 'dashboard.'. $page;
    
        if (view()->exists($viewPath)) {
            $products=Product::all();

            return view($viewPath, compact('products','users'));
        } else {
            return view('404');
        }
    }
    

}
