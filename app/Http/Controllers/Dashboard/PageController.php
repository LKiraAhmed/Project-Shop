<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Catigory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;

class PageController extends Controller
{
    //
    public function index($page, Request $request)
    {
        $users=User::all();
        $viewPath = 'dashboard.'. $page;
        $categories = Catigory::all();  

        if (view()->exists($viewPath)) {
            $products=Product::all();
            $latestOrders = Order::orderBy('created_at', 'desc')->get();

            return view($viewPath, compact('products','users','categories','latestOrders'));
        } else {
            return view('dashboard.404');
        }
    }
    

}
