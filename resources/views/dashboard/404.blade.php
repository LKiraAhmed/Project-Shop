<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Products </title>

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

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default sticky-header">
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
                      <li><a href="login">My Account</a></li>
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
                <a class="action-item" href="page-search">
                  <i class="zmdi zmdi-search icon"></i>
                </a>
              </li>
              <li class="currency-menu">
                <a class="action-item" href="#/"><i class="zmdi zmdi-lock-outline icon"></i></a>
                <ul class="currency-dropdown">
                  <li class="currency">
                    <a href="#/"><span class="current-currency">USD</span></a>
                    <ul>
                      <li class="active"><a href="#/">USD - US Dollar</a></li>
                      <li class="#/"><a href="#/">EUR - Euro</a></li>
                      <li class="#/"><a href="#/">GBP - British Pound</a></li>
                      <li class="#/"><a href="#/">INR - Indian Rupee</a></li>
                      <li class="#/"><a href="#/">BDT - Bangladesh Taka</a></li>
                      <li class="#/"><a href="#/">JPY - Japan Yen</a></li>
                      <li class="#/"><a href="#/">CAD - Canada Dollar</a></li>
                      <li class="#/"><a href="#/">AUD - Australian Dollar</a></li>
                    </ul>
                  </li>
                  <li class="account">
                    <a href="#/"><span class="current-account">My account</span></a>
                    <ul>
                      <li><a href="login">Login</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="mini-cart">
                <a class="action-item" href="#/">
                  <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                  <span class="cart-quantity">2</span>
                </a>
                <div class="mini-cart-dropdown">
                  <div class="cart-item">
                    <div class="thumb">
                      <img class="w-100" src="assets/img/shop/cart/1.jpg" alt="Image-HasTech">
                    </div>
                    <div class="content">
                      <h5 class="title"><a href="#/">Literature Classical - s</a></h5>
                      <span class="product-quantity">1 ×</span>
                      <span class="product-price">$79.00</span>
                      <a class="cart-trash" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                    </div>
                  </div>
                  <div class="cart-item">
                    <div class="thumb">
                      <img class="w-100" src="assets/img/shop/cart/2.jpg" alt="Image-HasTech">
                    </div>
                    <div class="content">
                      <h5 class="title"><a href="#/">Fit Wool Suit - m / gold</a></h5>
                      <span class="product-quantity">1 ×</span>
                      <span class="product-price">$80.00</span>
                      <a class="cart-trash" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                    </div>
                  </div>
                  <div class="cart-total-money">
                    <h5>Total: <span class="money">$159.00</span></h5>
                  </div>
                  <div class="cart-btn">
                    <a href="cart">View Cart</a>
                    <a href="checkout">Checkout</a>
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
                  <li>404 Not Found</li>
                </ul>
              </nav>
              <h4 class="title">404 Not Found</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Page Not Found Area Wrapper ==-->
    <section class="page-not-found-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-not-found-content">
              <h1>404</h1>
              <h2>Opps! PAGE NOT BE FOUND</h2>
              <p>Sorry but the page you are looking for does not exist, have <br> been removed, name changed or is temporarity unavailable.</p>
              <a class="btn-back" href="index">Back to home page</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Not Found Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <div class="footer-top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <div class="about-widget">
                <div class="footer-logo-area">
                  <a href="index">
                    <img class="logo-main footer-logo" src="assets/img/be-unique-logo.jpg" alt="Logo" />
                  </a>
                </div>
                <p class="desc">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididun ut labore gthydolore.</p>
                <ul>
                  <li><i class="ion-ios7-location-outline"></i> 184 Be Unique Rd E, St Be Unique VIC 3021,</li>
                  <li><i class="ion-ios7-email-outline"></i> <a href="mailto://info@example.com">info@example.com</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item widget-item-one">
              <h4 class="widget-title">INFORMATION</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="shop">Specials</a></li>
                  <li><a href="shop">New products</a></li>
                  <li><a href="shop">Top sellers</a></li>
                  <li><a href="shop">Our stores</a></li>
                  <li><a href="contact">Contact us</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item widget-item-two">
              <h4 class="widget-title">QUICK LINKS</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="login">New User</a></li>
                  <li><a href="about-us">Help Center</a></li>
                  <li><a href="about-us">Refund Policy</a></li>
                  <li><a href="about-us">Report Spam</a></li>
                  <li><a href="login">Account</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">newsletter</h4>
              <div class="widget-newsletter">
                <p>Sign up for our newsletter & promotions</p>
                <div class="newsletter-form">
                  <form>
                    <input type="email" class="form-control" placeholder="email@example.com">
                    <button class="btn-submit" type="button">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
        </div>
      </div>
      
    </div>
    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="copyright">© 2023 <span>Be Unique</span>. Made with <i class="fa fa-heart icon-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival/portfolio"> Crevel</a></p>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

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

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>

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

</body>

</html>