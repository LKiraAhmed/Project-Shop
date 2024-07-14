<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title> 

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('assets/img/be-unique-logo.jpg') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="{{ asset('assets/css/headroom.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href="{{ asset('assets/css/ionicons.css') }}" rel="stylesheet" />
    <!--== Material Icon CSS ==-->
    <link href="{{ asset('assets/css/material-design-iconic-font.css') }}" rel="stylesheet" />
    <!--== Elegant Icon CSS ==-->
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('assets/css/fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{ asset('assets/css/slicknav.css') }}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!--wrapper start-->
<div class="wrapper">

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

    <header class="header-area header-default">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-6 col-sm-4 col-lg-3">
                  <div class="header-logo-area">
                      <a href="index">
                          <img class="logo-main" src="{{asset('assets/img/be-unique-logo.jpg')}}" alt="Logo" />
                          <img class="logo d-none" src="{{asset('assets/img/logo-light.png')}}" alt="Logo" />
                      </a>
                  </div>
              </div>
              <div class="col-sm-4 col-lg-7 d-none d-lg-block">
                  <div class="header-navigation-area">
                      <ul class="main-menu nav position-relative">
                          <li class="has-submenu"><a href="#/">Home</a>
                              <ul class="submenu-nav">
                                  <li><a href="{{route('home')}}">Home</a></li>
                              </ul>
                          </li>
                          <li class="has-submenu full-width"><a href="">Shop</a>
                              <ul class="submenu-nav submenu-nav-mega">
                                  <li class="mega-menu-item"><a href="" class="mega-title">Shop Layouts</a>
                                      <ul>
                                          <li><a href="{{route('shop-3-grid')}}">Shop All</a></li>
                                      </ul>
                                  </li>
                                  <li class="mega-menu-item"><a href="#" class="mega-title">Shop Pages</a>
                                      <ul>
                                        @auth
                                        <li><a href="{{ url('login') }}">{{ Auth::user()->name }}</a></li>
                                         @else
                                        <li><a href="{{ url('login') }}">Login</a></li>
                                         @endauth     
                                          <li><a href="{{url('login')}}"></a></li>
                                          <li><a href="{{route('wishlist.index')}}">Wishlist</a></li>
                                          <li><a href="{{route('cart.index')}}">Cart</a></li>
                                          <li><a href="{{url('checkout')}}">Checkout</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li><a href="{{url('contact')}}">Contact</a></li>
                          <li><a href="{{urL('about-us')}}">About</a></li>
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
                                        <img class="w-100" src="/allFiels/{{ $cartItem->product->image }}" alt="{{ $cartItem->product->name }}">
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
                                      <h5>Total: <span class="money">{{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}</span></h5>
                                  </div>
                                  <div class="cart-btn">
                                      <a href="{{ route('cart.index') }}">View Cart</a>
                                      <a href="{{route('checkout')}}">Checkout</a>
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
  @yield('content')

    <!--== Start Brand Logo Area Wrapper ==-->

    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <!--== End Blog Area Wrapper ==-->
  </main>





<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jQuery Headroom Min Js ===-->
<script src="assets/js/headroom.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jQuery Slick Nav Js ===-->
<script src="assets/js/slicknav.js"></script>
<!--=== jQuery Zoom Min Js ===-->
<script src="assets/js/jquery-zoom.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>



    <!--=======================Javascript============================-->

    <!--=== jQuery Modernizr Min Js ===-->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('assets/js/jquery-main.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <!--=== jQuery Popper Min Js ===-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!--=== jQuery Bootstrap Min Js ===-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--=== jQuery Headroom Min Js ===-->
    <script src="{{ asset('assets/js/headroom.min.js') }}"></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!--=== jQuery Fancybox Min Js ===-->
    <script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
    <!--=== jQuery Slick Nav Js ===-->
    <script src="{{ asset('assets/js/slicknav.js') }}"></script>
    <!--=== jQuery Countdown Js ===-->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>

    <!--=== jQuery Custom Js ===-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
