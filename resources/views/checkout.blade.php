<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Products Information :: Be Unique – Minimal Fashion Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/be-unique-logo.jpg" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="assets/css/headroom.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href="assets/css/ionicons.css" rel="stylesheet" />
    <!--== Material Icon CSS ==-->
    <link href="assets/css/material-design-iconic-font.css" rel="stylesheet" />
    <!--== Elegant Icon CSS ==-->
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
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
<div class="wrapper product-information-wrapper">

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
  
  <main class="main-content">
    <!-- Start Product Area Wrapper -->
    <section class="product-area product-information-area">
        <div class="container">
            <div class="product-information">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="edit-checkout-head">
                            <div class="header-logo-area">
                                <a href="index">
                                    <img class="logo-main" src="assets/img/be-unique-logo.jpg" alt="Logo">
                                </a>
                            </div>
                            <div class="breadcrumb-area">
                                <ul>
                                    <li><a class="active" href="cart">Cart</a><i class="fa fa-angle-right"></i></li>
                                    <li>Payment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="edit-checkout-information">
                            <h4 class="title">Contact information</h4>
                            <div class="logged-in-information">
                                <div class="thumb" data-bg-img="assets/img/photos/gravatar2.png"></div>
                                <p>
                                    @auth
                                    <span class="name">{{ Auth::user()->name }}</span>
                                    <span>({{ Auth::user()->email }})</span>
                                    <a href="{{ route('login') }}">Log out</a>
                                    @else
                                    <a href="{{ route('login') }}">Login</a>
                                    @endauth
                                </p>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Keep me up to date on news and exclusive offers</label>
                            </div>
                            <div class="edit-checkout-form">
                         
                                <h4 class="title">Shipping address</h4>
                                <form action="{{ route('orders.create') }}" method="POST">
                                  @csrf
                                  @foreach($cartItems as $cartItem)
                                      <input type="hidden" name="product_id[]" value="{{ $cartItem->product_id }}">
                                      <input type="hidden" name="quantity[]" value="{{ $cartItem->quantity }}">
                                  @endforeach
                                  <div class="row row-gutter-12">
                                      <div class="col-lg-6">
                                          <div class="form-floating">
                                              <input type="text" class="form-control" id="floatingInputGrid" placeholder="First name" name="first_name" value="{{ old('first_name') }}">
                                              <label for="floatingInputGrid">First name (optional)</label>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-floating">
                                              <input type="text" class="form-control" id="floatingInput2Grid" placeholder="Last name" name="last_name" value="{{ old('last_name') }}">
                                              <label for="floatingInput2Grid">Last name</label>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-floating">
                                              <input type="text" class="form-control" id="floatingInput3Grid" placeholder="Address" name="address" value="{{ old('address') }}">
                                              <label for="floatingInput3Grid">Address</label>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-floating">
                                              <input type="text" class="form-control" id="floatingInput5Grid" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                                              <label for="floatingInput5Grid">Phone</label>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="btn-box">
                                              <button type="submit" class="btn-shipping">Continue to shipping</button>
                                              <a class="btn-return" href="{{ route('cart.index') }}">Return to cart</a>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                              
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shipping-cart-subtotal-wrapper">
                            <div class="shipping-cart-subtotal">
                                @foreach($cartItems as $cartItem)
                                <div class="shipping-cart-item">
                                    <div class="thumb">
                                        <img src="/allFiels/{{ $cartItem->product->image }}" alt="{{ $cartItem->product->name }}">
                                        <span class="quantity">{{ $cartItem->quantity }}</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{ $cartItem->product->name }}</h4>
                                        <span class="price">{{ $cartItem->product->price *  $cartItem->quantity }}</span>
                                    </div>
                                </div>
                                @endforeach
                                <div class="shipping-total">
                                    <p class="total">Total:</p>
                                    <p class="price"><span class="usd">{{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Area Wrapper -->
    <div class="edit-checkout-footer">
        <p>All rights reserved Demo Be Unique</p>
    </div>
</main>



  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/quick-view1.jpg" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Meta Slevless Dress</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSizes" class="form-label">Size:</label>
                  <select class="form-select" id="forSizes" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColors" class="form-label">Color:</label>
                  <select class="form-select" id="forColors" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity4" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

</div>

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
<!--=== jQuery Countdown Js ===-->
<script src="assets/js/countdown.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>
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

</html>