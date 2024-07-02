@extends('layouts.admin')

@section('content')
<div class="wrapper">

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
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">/</li>
                  <li>Product Details</li>
                </ul>
              </nav>
              <h4 class="title">Product Details</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Single Area Wrapper ==-->
    <section class="product-area product-single-area">
      <div class="container pt-60 pb-0">
        <div class="row">
          <div class="col-12">
            <div class="product-single-item" data-margin-bottom="63">
              <div class="row">
                <div class="col-lg-6">
                  <!--== Start Product Thumbnail Area ==-->
                  <div class="product-thumb">
                    <div class="zoom zoom-hover">
                      <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg">
                        <img class="w-100 h-100" src="{{ Storage::url($products->image) }}"   alt="{{$products->name}}">
                      </a>
                    </div>
                  </div>
                  <!--== End Product Thumbnail Area ==-->
                </div>
                <div class="col-lg-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h4 class="title">{{$products->name}}</h4>
                    <div class="prices">
                      <span class="price">{{$products->price}}</span>
                      <span class="price-old">{{$products->discount}}</span>
                    </div>
                    <div class="rating-box-wrap">
                      <div class="rating-box">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="review-status">
                        <a href="javascript:void(0)">( 1 Customer Review )</a>
                      </div>
                    </div>
                    <?php
              $description = $products->description;
              $max_length = 100; 
              if (strlen($description) > $max_length) {
            $description = substr($description, 0, $max_length) . '...';
            }?>

                  <p><?php echo $description; ?></p>
                  {{-- @endforeach --}}
                    <div class="product-action-simple">
                        <div class="product-quick-action">
                            <div class="product-quick-qty">                    
                                <form action="{{ route('cart.store') }}" method="POST" class="product-form">
                                    @csrf
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" name="quantity" title="Quantity" value="1">
                                    </div>
                                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                                    <button type="submit" class="btn-product-add">ADD TO CART</button>
                                </form>
                                
                            <div class="product-wishlist">
                                @auth
                                    <form action="{{ route('wishlist.store') }}" method="POST" id="wishlistForm">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                                        <a href="#" class="btn-wishlist" onclick="document.getElementById('wishlistForm').submit(); return false;">Add to wishlist</a>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="btn-wishlist">Login to add to wishlist</a>
                                @endauth
                            </div>
                            
                            <div class="payment-button">
                                <a href="#/" class="btn-payment">Buy it now</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!--== End Product Info Area ==-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-review-tabs-content">
              <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                <li role="presentation">
                  <a class="active" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                </li><li role="presentation">
                  <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                </li><li role="presentation">
                  <a id="shipping-policy-tab" data-bs-toggle="pill" href="#shipping-policy" role="tab" aria-controls="shipping-policy" aria-selected="false">Shipping Policy</a>
                </li><li role="presentation">
                </li>
              </ul>
              <div class="tab-content product-tab-content" id="ReviewTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <div class="product-description">
                    <p class="mb-0">{{$products->description}}</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <div class="product-review-content">
                    <div class="review-content-header">
                      <h3>Customer Reviews</h3>
                      <div class="review-info">
                        <ul class="review-rating">
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star-o"></li>
                        </ul>
                      </div>
                    </div>

                    <!--== Start Reviews Form Item ==-->
                   <!--== Start Reviews Form Item ==-->
                   <div class="reviews-form-area show">
                    <h4 class="title">Write a review</h4>
                    <div class="reviews-form-content">
                        <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="title">Rating</span>
                                        <ul class="review-rating" id="ratingStars">
                                          <li class="fa fa-star-o star" data-rating="1"></li>
                                          <li class="fa fa-star-o star" data-rating="2"></li>
                                          <li class="fa fa-star-o star" data-rating="3"></li>
                                          <li class="fa fa-star-o star" data-rating="4"></li>
                                          <li class="fa fa-star-o star" data-rating="5"></li>
                                      </ul>
                                      <input type="hidden" name="rating" id="ratingInput">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="for_review-title">Review Title</label>
                                        <input id="for_review-title" name="title" class="form-control" type="text" placeholder="Give your review a title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="for_comment">Body of Review (1500)</label>
                                        <textarea id="for_comment" name="body" class="form-control" placeholder="Write your comments here"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-submit-btn">
                                        <button type="submit" class="btn-submit">Post comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
<!--== End Reviews Form Item ==-->

                    <!--== End Reviews Form Item ==-->
                    <div class="reviews-content-body">
                      <!-- Iterate over each review item -->
                      @foreach ($reviews as $review)
                      <div class="review-item">
                          <!-- Display star ratings (assuming $review->rating is the rating value) -->
                          <ul class="review-rating">
                            @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                                <li class="fa fa-star"></li>
                            @else
                                <li class="fa fa-star-o"></li>
                            @endif
                        @endfor
                          </ul>
                          <!-- Display review title -->
                          <h3 class="title">{{ $review->title }}</h3>
                          <!-- Display reviewer's name and date (assuming $review->user->name and $review->created_at for date) -->
                          <h5 class="sub-title"><span>{{ $review->user->name }}</span> on <span>{{ $review->created_at->format('M d, Y') }}</span></h5>
                          <!-- Display review body -->
                          <p>{{ $review->body }}</p>
                          <!-- Option to report as inappropriate (example link, adjust as per your application logic) -->
                          <a href="#">Report as Inappropriate</a>
                      </div>
                      @endforeach
                      
                  
                      <!-- Pagination for reviews (example: assuming you have pagination logic) -->
                      <div class="review-pagination">
                          <span class="pagination-pag">1</span>
                          <span class="pagination-pag">2</span>
                          <span class="pagination-next">Next »</span>
                      </div>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Start Product Single Area Wrapper -->

<section class="product-area product-new-arrivals-area product-related-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-container product-slider-container">
                    <div class="swiper-wrapper">
                      @foreach ($randomProducts as $randomProduct)
                      <div class="swiper-slide">
                          <!-- Start Shop Item -->
                          <div class="product-item">
                              <div class="inner-content">
                                  <div class="product-thumb">
                                      <a href="{{ route('products.single', $randomProduct->id) }}">
                                          <img class="w-80" src="{{ Storage::url($randomProduct->image) }}" alt="{{ $randomProduct->name }}">
                                      </a>
                                      <h4 class="title">{{ $randomProduct->name }}</h4>
                                      @if ($randomProduct->sale_title)
                                      <span class="sale-title sticker">{{ $randomProduct->sale_title }}</span>
                                      @endif
                                      @if ($randomProduct->percent_count)
                                      <span class="percent-count sticker">{{ $randomProduct->percent_count }}</span>
                                      @endif
                                      <div class="product-action">
                                          <div class="addto-wrap">
                                              <a href="#" class="add-cart" onclick="addToCart({{ $randomProduct->id }});">
                                                  <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                              </a>
                                              <a class="add-wishlist" href="#" onclick="addWishlist({{ $randomProduct->id }})">
                                                  <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-desc">
                                      <div class="product-info">
                                          <h4 class="title">
                                              <a href="{{ route('products.single', $randomProduct->id) }}">{{ $randomProduct->name }}</a>
                                          </h4>
                                          <div class="star-content">
                                              @for ($i = 1; $i <= 5; $i++)
                                                  @if ($i <= round($randomProduct->averageRating))
                                                      <li class="fa fa-star"></li>
                                                  @else
                                                      <li class="fa fa-star-o"></li>
                                                  @endif
                                              @endfor
                                          </div>
                                          <div class="prices">
                                              <span class="price">${{ $randomProduct->price }}</span>
                                              @if ($randomProduct->old_price)
                                                  <span class="price-old">${{ $randomProduct->old_price }}</span>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Shop Item -->
                      </div>
                      @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

<!-- End Product Area Wrapper -->
<!-- Start Quick View Menu -->
<aside class="product-quick-view-modal" id="quickViewModal">
  <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
          <button type="button" class="btn-close" onclick="closeQuickViewModal()">
              <span class="close-icon"><i class="fa fa-close"></i></span>
          </button>
          <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="thumb">
                      <img id="quick-view-image" src="" alt="Product Image">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="content">
                      <h4 class="title" id="quick-view-title"></h4>
                      <div class="prices">
                          <del class="price-old" id="quick-view-price-old">$</del>
                          <span class="price" id="quick-view-price">$</span>
                      </div>
                      <p id="quick-view-description"></p>
                      <div class="action-top">
                          <div class="pro-qty">
                              <input type="number" id="quick-view-quantity" title="Quantity" value="1" min="1">
                          </div>
                          <form id="quick-view-cart-form" action="{{ route('cart.store') }}" method="POST">
                              @csrf
                              <input type="hidden" name="product_id" id="quick-view-product-id" value="">
                              <input type="hidden" name="quantity" id="quick-view-quantity" value="1">
                              <button type="submit" class="btn btn-black">Add to Cart</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="canvas-overlay" onclick="closeQuickViewModal()"></div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  function addToCart(productId) {
      const postData = {
          product_id: productId,
          quantity: 1,
          _token: '{{ csrf_token() }}'
      };

      axios.post('{{ route('cart.store') }}', postData)
          .then(response => {
              console.log(response.data);
              window.location.href = '/cart'; 
          })
          .catch(error => {
              console.error('Error:', error);
              alert('An error occurred. Please try again.'); 
          });
  }
</script>




  <script>
    function addWishlist(productId) {
        const postData = {
            product_id: productId,
            token: '{{ csrf_token() }}'
        };
    
        axios.post('{{ route("wishlist.store") }}', postData)
            .then(response => {
                console.log(response.data);
                window.location.href = '{{ route("wishlist.index") }}'; 
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
              });
    }
    </script>



<!-- End Quick View Menu -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach ($randomProducts as $randomProduct)
            updateStarRating({{ $randomProduct->id }}, {{ $randomProduct->star_rating }});
        @endforeach
    });

    function updateStarRating(productId, starRating) {
        const starContainer = document.querySelector(`#product-star-rating-${productId}`);
        if (!starContainer) return; 
        // Clear previous stars
        starContainer.innerHTML = '';

        // Create star elements based on rating
        for (let i = 1; i <= 5; i++) {
            const star = document.createElement('li');
            star.className = `fa ${i <= starRating ? 'fa-star' : 'fa-star-o'}`;
            starContainer.appendChild(star);
        }
    }

     document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.review-rating .star');
        const ratingInput = document.getElementById('ratingInput');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const ratingValue = parseInt(this.getAttribute('data-rating'));
                ratingInput.value = ratingValue;

                // Update star appearance
                stars.forEach(s => {
                    const sRating = parseInt(s.getAttribute('data-rating'));
                    if (sRating <= ratingValue) {
                        s.classList.remove('fa-star-o');
                        s.classList.add('fa-star');
                    } else {
                        s.classList.remove('fa-star');
                        s.classList.add('fa-star-o');
                    }
                });
            });
        });
    });
    $(document).ready(function() {
        $('.star').click(function() {
            var rating = $(this).data('rating');
            $('#ratingStars .star').removeClass('fa-star').addClass('fa-star-o');
            $(this).prevAll().addBack().removeClass('fa-star-o').addClass('fa-star');
            $('#ratingInput').val(rating);
        });
    });
    $(document).ready(function() {
    $('#reviewForm').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                alert(response.success); // Replace with your desired success handling (e.g., show message)
                // Optionally, clear the form after successful submission
                $('#reviewForm')[0].reset();
                $('#ratingStars .star').removeClass('fa-star').addClass('fa-star-o');
                $('#ratingInput').val('');
            },
            error: function(xhr) {
                if (xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    // Handle validation errors here, e.g., show them next to the form fields
                    console.log(errors);
                }
            }
        });
    });
});

    function openQuickViewModal(productId) {
        var product = {!! json_encode($randomProducts->keyBy('id')->toArray()) !!}[productId];
        
        $('#quick-view-image').attr('src', "{{ Storage::url('') }}" + product.image);
        $('#quick-view-title').text(product.name);
        $('#quick-view-price').text('$' + product.price);
        $('#quick-view-price-old').text('$' + (product.old_price ? product.old_price : ''));
        $('#quick-view-description').text(product.description);

        // Set up the form action dynamically
        $('#quick-view-add-to-cart').closest('form').attr('action', "{{ route('cart.store') }}");
        $('#quick-view-add-to-cart').attr('data-product-id', product.id);

        $('#quickViewModal').addClass('active');
    }

    function closeQuickViewModal() {
        $('#quickViewModal').removeClass('active');
    }

    // Update quantity for Add to Cart in Quick View modal
    $('#quick-view-add-to-cart').click(function(e) {
        e.preventDefault();
        var productId = $(this).attr('data-product-id');
        var quantity = $('#quick_view_quantity_' + productId).val();
        $('#hidden_quantity_' + productId).val(quantity);
        $(this).closest('form').submit();
    });

    // Update quantity for Add to Cart in Product Listing
    $('.btn-product-add').click(function(e) {
        e.preventDefault();
        var productId = $(this).closest('form').find('input[name="product_id"]').val();
        var quantity = $('#hidden_quantity_' + productId).val();
        $('#hidden_quantity_' + productId).val(quantity);
        $(this).closest('form').submit();
    });
    function openQuickViewModal(productId) {
        var product = {!! json_encode($randomProducts->keyBy('id')->toArray()) !!}[productId];
        
        $('#quick-view-image').attr('src', "{{ Storage::url('') }}" + product.image);
        $('#quick-view-title').text(product.name);
        $('#quick-view-price').text('$' + product.price);
        $('#quick-view-price-old').text('$' + (product.old_price ? product.old_price : ''));
        $('#quick-view-description').text(product.description);

        // Set up the form action dynamically
        $('#quick-view-cart-form').attr('action', "{{ route('cart.store') }}");
        $('#quick-view-product-id').val(product.id);

        $('#quickViewModal').addClass('active');
    }

    function closeQuickViewModal() {
        $('#quickViewModal').removeClass('active');
    }

    // Handle Add to Cart button click inside Quick View modal
    $('#quick-view-cart-form').submit(function(e) {
        e.preventDefault();
        var quantity = $('#quick-view-quantity').val();
        $('#quick-view-quantity').val(quantity); // Ensure quantity is updated
        $(this).unbind('submit').submit(); // Submit the form
    });

    
</script>




  

@endsection
