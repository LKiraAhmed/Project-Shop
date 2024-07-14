@extends('dashboard.layouts.app')

@section('title', 'Remos eCommerce Admin Dashboard HTML Template') 

@section('content')

                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    
                    <!-- /header-dashboard -->
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
<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search">
                <fieldset class="name">
                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="oder-detail"><i class="icon-file-text"></i>Export all order</a>
    </div>
    <div class="wg-table table-all-category">
        <ul class="table-title flex gap20 mb-14">
            <li>
                <div class="body-title">Product-Image</div>
            </li>    
            <li>
                <div class="body-title">Name</div>
            </li>
            <li>
                <div class="body-title">Order ID</div>
            </li>
            <li>
                <div class="body-title">Price</div>
            </li>
            <li>
                <div class="body-title">Address</div>
            </li>
            <li>
                <div class="body-title">Phone</div>
            </li>
            <li>
                <div class="body-title">Name User</div>
            </li>
            <li>
                <div class="body-title">Action</div>
            </li>
        </ul>
        <ul class="flex flex-column">
            @foreach($orders as $order)
            <li class="product-item gap14">
                <div class="image no-bg">
                    {{-- @php
                        $OrderItems = App\Models\OrderItem::where('order_id', $order->id)->with('product')->get();
                    @endphp --}}
                    @foreach($OrderItems as $orderItem)
                    <div>
                        @if ($orderItem->product) 
                            <img src="/allFiels/{{ $orderItem->product->image }}" alt="{{ $orderItem->product->name }}">
                        @else
                            <p>No product image available</p>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-between gap20 flex-grow">
                    <div class="body-text">{{ $order->first_name }}</div>
                    <div class="body-text">{{ $order->last_name }}</div>
                    <div class="body-text">#{{ $loop->iteration }}</div>
                    <div class="body-text">
                        @php
                            $totalPrice = $OrderItems->sum(function ($item) {
                                return $item->product ? ($item->product->price * $item->quantity) : 0;
                            });
                        @endphp
                        {{ $totalPrice }}
                    </div>                        
                    <div class="body-text">{{ $order->address }}</div>
                    <div class="body-text">{{ $order->phone }}</div>
                    <div class="body-text">{{ $order->user->name }}</div> <!-- Assuming user relationship -->
                    <div class="list-icon-function">
                  
              
                        <div class="item trash">
                            <i class="icon-trash-2"></i>
                        </div>
                    </div>
                </div>
            </li>
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
<!-- /order-list -->

                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                       
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    @endsection
