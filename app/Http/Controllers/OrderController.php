<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\NewOrderNotificatio;
use Illuminate\Support\Facades\Notification;
use App\Events\NewOrderEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'nullable|string',
            'address' => 'required|string',
            'product_id' => 'required|array', 
            'quantity' => 'required|array', 
        ]);

        $product_id_json = json_encode($request->product_id);
        $quantityarray = json_encode($request->quantity);


        $order = new Order();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->quantity = $quantityarray;
        $order->product_id = $product_id_json; 
        $order->user_id=$user->id;
        $order->save();
        Cart::where('user_id', Auth::id())->delete();
      ///  Notification::send([], new NewOrderNotificatio($order));
       // event(new NewOrderEvent($order));

        try {
            return redirect()->back()->with('success', 'Order created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        }
    }
    public function create(Request $request)
    {
        
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required|numeric|min:1',
            ]);
        
            $userId = Auth::id();
        
            if (!$userId) {
                return redirect()->route('login');
            }
        
            $cartItem = Cart::updateOrCreate(
              [
                  'user_id' =>$userId,
                  'product_id' => $request->product_id,
              ],
              [
                  'quantity' => DB::raw('quantity + ' . $request->quantity)
              ]
          );
        
            $cartItems = Cart::where('user_id', $userId)->get();
            session(['cart' => $cartItems]);
        
        return redirect()->route('checkout');
    }

    public function showOrder()
    {
        
        $orders = Order::with('products')->get();
        $users = User::all();
        $latestOrders = Order::orderBy('created_at', 'desc')->get();
        return view('dashboard.oder-list', compact('orders','users','latestOrders'));
    }
    public function deleteOrder($id){
        $order = Order::find($id);
        
        if ($order) {
            $order->delete();
            return response()->json(['message' => 'Delete Order Done!']);
        } else {
            return response()->json(['message' => 'Order not found!']);
        }
    }
    
}
