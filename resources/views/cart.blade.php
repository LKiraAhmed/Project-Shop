<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Shopping Cart :: Be Unique – Minimal Fashion Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/be-unique-logo.jpg" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <style>
      .cart-update-form .btn-save {
          background-color: #222;
          color: #fff;
          border: none;
          padding: 8px 16px;
          font-size: 14px;
          font-weight: 600;
          cursor: pointer;
          transition: background-color 0.3s ease;
          margin-left: 5px;
          padding-left:5px;
           
            }


 
  </style>
  
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
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title mt-0">Your Shopping Cart</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area shopping-cart-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="shopping-cart-wrap">
                      <div class="cart-table table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th class="indecor-product-remove">Remove</th>
                                      <th class="indecor-product-thumbnail">Image</th>
                                      <th class="indecor-product-name">Product</th>
                                      <th class="indecor-product-price">Price</th>
                                      <th class="indecor-product-quantity">Quantity</th>
                                      <th class="indecor-product-subtotal">Subtotal</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php
                                      $total = 0;
                                  @endphp
                                  @foreach ($cartItems as $cartItem)
                                      @php
                                          $product = $cartItem->product;
                                          $subtotal = $product->price * $cartItem->quantity;
                                          $total += $subtotal;
                                      @endphp
                                      <tr>
                                          <td class="indecor-product-remove">
                                              <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-link">
                                                      <i class="fa fa-times"></i>
                                                  </button>
                                              </form>
                                          </td>
                                          <td class="indecor-product-thumbnail">
                                              <a href="{{ route('products.single', $product->id) }}">
                                                  <img src="/allFiels/{{ $product->image }}" alt="{{ $product->name }}">
                                              </a>
                                          </td>
                                          <td class="indecor-product-name">
                                              <h4 class="title">
                                                  <a href="{{ route('products.single', $product->id) }}">{{ $product->name }}</a>
                                              </h4>
                                          </td>
                                          <td class="indecor-product-price">
                                              <span class="price">${{ number_format($product->price, 2) }}</span>
                                          </td>
                                          <td class="indecor-product-quantity">
                                            <div class="pro-qty">
                                              <input type="number" id="quantityInput{{ $product->id }}" value="{{ $cartItem->quantity }}" step="any" onchange="updateCartItem('{{ route('cart.updateCart') }}', '{{ $product->id }}', this.value)">
                                          </div>
                                          </td>
                                          <td class="indecor-product-subtotal">
                                              <span class="price">${{ number_format($subtotal, 2) }}</span>
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                      <div class="cart-total">
                          <h4>Cart Totals</h4>
                          <ul>
                              <li>
                                  Subtotal<span>${{ number_format($total, 2) }}</span>
                              </li>
                              <li>
                                  Total<span>${{ number_format($total, 2) }}</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
    <!--== End Product Area Wrapper ==-->
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
<!-- Include Axios library -->
<!-- Include Axios library -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  function updateCartItem(route, cartItemId, newQuantity) {
      const requestData = {
          product_id: productId,
          quantity: newQuantity,
          _token: '{{ csrf_token() }}'
      };

      axios.post('{{ route('cart.updateCart') }}', requestData)
          .then(response => {
              console.log(response.data);
              
          })
          .catch(error => {
              console.error('Error:', error);
          });
  }
</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      const updateButtons = document.querySelectorAll('.update-cart');

      updateButtons.forEach(button => {
          button.addEventListener('click', function() {
              const cartItemId = this.getAttribute('data-cart-id');
              const newQuantity = document.querySelector(`[data-cart-id="${cartItemId}"]`).value;

              axios.put(`{{route('cart.updateCart')}}`, {
                  quantity: newQuantity
              })
              .then(response => {
                  alert(response.data.message);
              })
              .catch(error => {
                  console.error('Error updating cart:', error);
                  alert('Failed to update cart. Please try again.');
              });
          });
      });
  });
</script>



<script>
  document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.quantity').forEach(input => {
          input.addEventListener('change', function () {
              var cartItemId = this.dataset.id;
              var newQuantity = parseInt(this.value);

              // Make sure newQuantity is valid
              if (isNaN(newQuantity) || newQuantity < 1) {
                  alert('Please enter a valid quantity.');
                  return;
              }

              // Update subtotal on the page
              updateSubtotal(cartItemId, newQuantity);

              // Optionally, you can also update the quantity in the backend via AJAX
              // Here's an example of sending the updated quantity to the server
              updateQuantityOnServer(cartItemId, newQuantity);
          });
      });

      function updateSubtotal(cartItemId, quantity) {
          var price = parseFloat(document.querySelector('.product-price[data-id="' + cartItemId + '"]').innerText.replace('$', ''));
          var subtotal = price * quantity;

          // Update subtotal on the page
          var subtotalElement = document.querySelector('.product-subtotal[data-id="' + cartItemId + '"]');
          subtotalElement.innerHTML = '$' + subtotal.toFixed(2);
      }

      function updateQuantityOnServer(cartItemId, quantity) {
          // Example AJAX request to update quantity on the server
          // Replace with your actual AJAX implementation
          fetch('/update-cart-item', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
              },
              body: JSON.stringify({
                  cartItemId: cartItemId,
                  quantity: quantity,
              }),
          })
          .then(response => response.json())
          .then(data => {
              // Handle response from server if needed
              console.log('Quantity updated on server:', data);
          })
          .catch(error => {
              console.error('Error updating quantity:', error);
          });
      }
  });
</script>

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

</body>

</html>