@extends('dashboard.layouts.app')

@section('title', 'Remos eCommerce Admin Dashboard HTML Template') 
@section('content')
<!-- section-content-right -->
<div class="section-content-right">
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Order List</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index"><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">Order</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Order List</div>
                        </li>
                    </ul>
                </div>

                <!-- order-list -->
                <div class="wg-table table-all-category">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Product Image</div>
                        </li>
                        <li>
                            <div class="body-title">Product Name</div>
                        </li>
                        <li>
                            <div class="body-title">Product Price</div>
                        </li> 
                        <li>
                            <div class="body-title">Order Quantity</div>
                        </li>   
                        <li>
                            <div class="body-title">Customer Name</div>
                        </li>
                        <li>
                            <div class="body-title">Order ID</div>
                        </li>
                        <li>
                            <div class="body-title">Order Total</div>
                        </li>
                        <li>
                            <div class="body-title">Address</div>
                        </li>
                        <li>
                            <div class="body-title">Phone</div>
                        </li>
                        <li>
                            <div class="body-title">User Email</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    <ul class="flex flex-column">
                        @foreach($orders as $order)

                        @php 
                            $productIds = json_decode($order->product_id);
                            $order->products = App\Models\Product::whereIn('id', $productIds)->get();
                            $user = $users->find($order->user_id);
                            $totalPrice = 0;
                            $quantities = json_decode($order->quantity);
                        @endphp
                         @foreach($order->products as $product)

                        <li class="product-item gap14">
                            @php
                     
                      $totalPrice = collect($order->products)->sum(fn($item) => $item->price * $quantities[array_search($item->id, $productIds)]);
                      $rad = 0;
                       foreach ($quantities as $key => $quantity) {
                                   if ($productIds[$key] == $product->id) {
                              $rad += $product->price * intval($quantity);
                       }
                  }
                            
                        @endphp
             
                    
                            <div class="flex items-center justify-between gap20 flex-grow">
                                <div class="product-details flex">
                                    <div class="image no-bg">
                                        <img  width="100px" height="100px" src="/allFiels/{{ $product->image }}" alt="{{ $product->name }}">
                                    </div>
                              
                                </div>
                                
                             <div class="body-text">{{ $product->name }}</div>
                             @php
                             $quantity = json_decode($order->quantity, true);                             
                             $displayQuantity = is_array($quantity) ? $quantity[0] : $quantity;
                         @endphp
                         

                  
                             <div class="body-text">{{ $rad }}</div>
                             <div class="body-text">{{ $displayQuantity }}</div>

                                <div class="body-text">{{ $order->first_name }} {{ $order->last_name }}</div>
                                <div class="body-text">#{{ $loop->iteration }}</div>
                                <div class="body-text"> {{ $totalPrice }} </div>
                                <div class="body-text">{{ $order->address }}</div>
                                <div class="body-text">{{ $order->phone }}</div>
                    
                                    <div class="body-text">{{ $user->email }}</div>
                                <div class="list-icon-function">
                                    <div class="item trash">
                                        <a href="" onclick="event.preventDefault(); deleteOrder({{ $order->id }})">
                                            <i class="icon-trash-2"></i>
                                        </a>
                                                                          
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                        @endforeach
                    </ul>
                 

                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny"></div>
                        <ul class="wg-pagination">
                            <li>
                                <a href="#"><i class="icon-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /main-content-wrap -->
            <!-- bottom-page -->
            <!-- /bottom-page -->
        </div>
        <!-- /main-content -->
    </div>
    <!-- /section-content-right -->
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function deleteOrder(orderId) {
        axios.delete(`/dashboard/orders/delete/${orderId}`)
        .then(response => {
            console.log(response.data);
            // Optionally reload the page or update the UI
            // location.reload(); 
        })
        .catch(error => {
            console.error(error);
        });
    }
    </script>
    

@endsection
