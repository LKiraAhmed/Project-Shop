@extends('layouts.admin')
@section('content')
    <div class="container">
        
 
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

        <main class="py-4">
            @yield('content')
        </main>
     <!--== Start Preloader Content ==-->
     <div class="preloader-wrap">
        <div class="preloader">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!--== End Preloader Content ==-->
    
      <!--== Start Header Wrapper ==-->
     
  <header class="header-area header-default">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="header-logo-area">
                    <a href="index">
                        <img class="logo-main" src="assets/img/be-unique-logo.jpg" alt="Logo" />
                        <img class="logo d-none" src="assets/img/logo-light.png" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-7 d-none d-lg-block">
                <div class="header-navigation-area">
                    <ul class="main-menu nav position-relative">
                        <li class="has-submenu"><a href="#/">Home</a>
                            <ul class="submenu-nav">
                                <li><a href="index">Home Demo 1</a></li>
                                <li><a href="index-two">Home Demo 2</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu full-width"><a href="#/">Shop</a>
                            <ul class="submenu-nav submenu-nav-mega">
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-3-grid">Shop All</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Shop Pages</a>
                                    <ul>
                                      @auth
                                      <li><a href="{{ url('login') }}">{{ Auth::user()->name }}</a></li>
                                       @else
                                      <li><a href="{{ url('login') }}">Login</a></li>
                                       @endauth     
                                        <li><a href="{{url('login')}}"></a></li>
                                        <li><a href="wishlist">Wishlist</a></li>
                                        <li><a href="cart">Cart</a></li>
                                        <li><a href="checkout">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="about-us">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-7 col-lg-2 d-none d-sm-block text-end">
                <div class="header-action-area">
                    <ul class="header-action">
                        <li class="search-item">
                          <a class="action-item" href="{{url('search')}}">
                            <i class="zmdi zmdi-search icon"></i>
                        </a> 
                        </li>
                     
                        <li class="mini-cart">
                            <a class="action-item" href="#/">
                                <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                <span class="cart-quantity">{{ count($cartItems) }}</span>
                            </a>
                            <div class="mini-cart-dropdown">
                                @foreach($cartItems as $cartItem)
                                    <div class="cart-item">
                                        <div class="thumb">
                                            <img class="w-100" src="{{ Storage::url($cartItem->product->image) }}" alt="{{ $cartItem->product->name }}">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="#/">{{ $cartItem->product->name }}</a></h5>
                                            <span class="product-quantity">{{ $cartItem->quantity }} ×</span>
                                            <span class="product-price">${{ number_format($cartItem->product->price, 2) }}</span>
                                            <a class="cart-trash" href="{{ route('cart.destroy', $cartItem->id) }}"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="cart-total-money">
                                    <h5>Total: <span class="money">${{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}</span></h5>
                                </div>
                                <div class="cart-btn">
                                    <a href="{{ route('cart.index') }}">View Cart</a>
                                    <a href="">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-sm-1 d-block d-lg-none text-end">
                <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
            </div>
        </div>
    </div>
</header>

      <!--== End Header Wrapper ==-->
      
    <main class="main-content">
      <!--== Start Page Header Area Wrapper ==-->
      <div class="page-header-area">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <div class="page-header-content">
                <nav class="breadcrumb-area">
                  <ul class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li class="breadcrumb-sep">/</li>
                    <li>Products</li>
                  </ul>
                </nav>
                <h4 class="title">Products</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--== End Page Header Area Wrapper ==-->
    
      <!--== Start Product Area Wrapper ==-->
      <section class="product-area product-inner-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="product-header-wrap d-md-flex justify-content-md-between align-items-center">
                <div class="grid-list-option">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                      <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-th-list"></i></button>
                    </div>
                  </nav>
                </div>
                <div class="nav-short-area d-md-flex align-items-center">
                  <p class="show-product">Showing 1 - 18 of 33 result</p>
                  <div class="toolbar-shorter">
                    <label for="SortBy">Sort by</label>
                    <select id="SortBy" class="form-select" aria-label="Sort by">
                      <option value="manual">Featured</option>
                      <option value="best-selling">Best Selling</option>
                      <option value="title-ascending" selected>Alphabetically, A-Z</option>
                      <option value="title-descending">Alphabetically, Z-A</option>
                      <option value="price-ascending">Price, low to high</option>
                      <option value="price-descending">Price, high to low</option>
                      <option value="created-descending">Date, new to old</option>
                      <option value="created-ascending">Date, old to new</option>
                    </select>
                  </div>
                </div>
              </div>
             <h2>Products</h2>
                <a  href="{{route('products.create')}}" class="btn btn-primary mb-2">Add Product</a>
 
             @if ($products->isEmpty())
               <p>No products found.</p>
            @else
            <div class="product-body-wrap">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                    <div class="row">
    
              <table class="table">
                  <thead>
                      <tr>
                          <th>Name</th>
                         <th>Price</th>
                         <th>Discount</th>
                         <th>Description</th>
                         <th>Image</th>
                         <th>Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>${{ number_format($product->discount, 2) }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('products.single', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>
        @endif
    </div>
@endsection
