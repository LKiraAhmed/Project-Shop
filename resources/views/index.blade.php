@extends('layouts.header')

@section('title', 'Be Unique – Unique Fashion ') 

@section('content')

  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          @foreach($randomProducts as $product)
         @php
          $description = $product->description;
          $max_length = 100; 
          if (strlen($description) > $max_length) {
        $description = substr($description, 0, $max_length) .'...';}
         @endphp
        
              <div class="swiper-slide">
                  <div class="slider-content-area" data-bg-img="/allFiels/{{ $product->image }}">
                      <div class="slider-content">
                        
                          <h5 class="sub-title">{{ $product->name }}</h5>
                          <h2 class="title">{{ $product->price }}</h2>>
                      
                        <p>{{$description}}</p>
                      </div>
                  </div>
              </div>
              @endforeach

        <!--== Add Swiper Arrows ==-->
        <div class="swiper-button-next"><i class="ion-ios7-arrow-right"></i></div>
        <div class="swiper-button-prev"><i class="ion-ios7-arrow-left"></i></div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <section class="feature-area">
      <div class="container pb-1">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Feature Item ==-->
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box">
                  <i class="icon ei ei-icon_pin_alt"></i>
                </div>
                <div class="content">
                  <h5 class="title">Free shipping worldwide</h5>
                  <p>Freeship over oder $100</p>
                </div>
              </div>
            </div>
            <!--== End Feature Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Feature Item ==-->
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box">
                  <i class="icon ei ei-icon_headphones"></i>
                </div>
                <div class="content">
                  <h5 class="title">Support 24/7</h5>
                  <p>Contact us 24 hours a day</p>
                </div>
              </div>
            </div>
            <!--== End Feature Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Feature Item ==-->
            <div class="feature-icon-box">
              <div class="inner-content mb-0">
                <div class="icon-box">
                  <i class="icon ei ei-icon_creditcard"></i>
                </div>
                <div class="content">
                  <h5 class="title">100% secure payment</h5>
                  <p>Your payment are safe with us.</p>
                </div>
              </div>
            </div>
            <!--== End Feature Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Feature Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container product-pb" data-padding-bottom="25">
        <div class="row">
          <div class="col-12">
            <div class="product-category-tab-wrap">
              <ul class="nav nav-tabs product-category-nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="best-seller-tab" data-bs-toggle="tab" data-bs-target="#bestSeller" type="button" role="tab" aria-controls="bestSeller" aria-selected="true">Best Seller</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="most-view-tab" data-bs-toggle="tab" data-bs-target="#mostView" type="button" role="tab" aria-controls="mostView" aria-selected="false">Highest rating</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="new-arrivals-tab" data-bs-toggle="tab" data-bs-target="#newArrivals" type="button" role="tab" aria-controls="newArrivals" aria-selected="false">New Arrivals</button>
                </li>
              </ul>
              <div class="tab-content product-category-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bestSeller" role="tabpanel" aria-labelledby="best-seller-tab">
                    <div class="row">
                      @php
                   
                  
                      $bestSellers =  App\Models\Order::select('product_id', \DB::raw('COUNT(*) as total_orders'))
                                          ->groupBy('product_id')
                                          ->orderByDesc('total_orders')
                                          ->get();
                  
                      $productIds = [];
                  
                      foreach ($bestSellers as $item) {
                          $ids = json_decode($item->product_id);
                  
                          $productIds = array_merge($productIds, $ids);
                      }
                  
                      $productIds = array_unique($productIds);
                      $productIds = array_map('intval', $productIds);
                  
                      $products = App\Models\Product::whereIn('id', $productIds)->get();
                  
                      // dd($productIds, $products);
                  @endphp
                  
                  
                        @foreach($products as $product)
                        <div class="col-md-3 col-sm-6 mb-4">
                            <!-- Start Shop Item -->
                            <div class="product-item">
                                <div class="inner-content">
                                    <div class="product-thumb">
                                        <a href="{{ route('products.single', $product->id) }}">
                                            <img class="w-100 small-img" src="/allFiels/{{ $product->image }}" alt="{{ $product->name }}">
                                        </a>
                                        <div class="product-action">
                                            <div class="addto-wrap">
                                                <a href="#" class="add-cart" onclick="addToCart({{ $product->id }})">
                                                    <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                                </a>
                                                <a class="add-wishlist" href="#" onclick="addWishlist({{ $product->id }})">
                                                    <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-info">
                                            <a href="{{ route('products.single', $product->id) }}">
                                                <h4 class="title">{{ $product->name }}</h4>
                                            </a>
                                            <div class="product-description">
                                                @php
                                                    $description = $product->description;
                                                    $max_length = 50;
                                                    if (strlen($description) > $max_length) {
                                                        $description = substr($description, 0, $max_length) . '...';
                                                    }
                                                @endphp
                                                <p>{{ $description }}</p>
                                            </div>
                                            <div class="prices">
                                              @if ($product->discount > 0)
                                              <span class="price">{{ $product->price - $product->discount }}</span>
                                              <span class="price-old">{{ $product->price }}</span>
                                              @else
                                              <span class="price">{{ $product->price }}</span>
                                            @endif
                                            </div>
                                            <div class="star-content">
                                              @php
                                              $averageRating = $product->reviews->avg('rating'); 
                                              $maxRating = $product->reviews->max('rating');
                                              $mostCommonRating = $product->reviews
                                                                  ->groupBy('rating')
                                                                  ->sortByDesc(function ($group) {
                                                                      return count($group);
                                                                  })
                                                                  ->keys()
                                                                  ->first();
                                          
                                              $displayRating = ($averageRating >= $maxRating) ? $averageRating : $mostCommonRating;
                                              @endphp
                                              @for ($i = 1; $i <= 5; $i++)
                                              @if ($i <= $displayRating)
                                                <i class="fa fa-star"></i>
                                               @else
                                                <i class="fa fa-star-o"></i>
                                                @endif
                                                @endfor
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
                
                <div class="tab-pane fade" id="mostView" role="tabpanel" aria-labelledby="most-view-tab">
                    <div class="row">
                      @php
use App\Models\Product;
use Illuminate\Support\Facades\DB;

$mostViewedProducts = Product::select('products.id', 'products.name', 'products.image', 'products.description', 'products.price', 'products.discount', DB::raw('AVG(reviews.rating) as average_rating'))
    ->leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
    ->groupBy('products.id', 'products.name', 'products.image', 'products.description', 'products.price', 'products.discount')
    ->orderByDesc('average_rating')
    ->get();


                      
                      @endphp
                        @foreach($mostViewedProducts as $product)
                        <div class="col-md-3 col-sm-6 mb-4">
                            <!-- Start Shop Item -->
                            <div class="product-item">
                                <div class="inner-content">
                                    <div class="product-thumb">
                                        <a href="{{ route('products.single', $product->id) }}">
                                            <img class="w-100 small-img" src="/allFiels/{{ $product->image }}" alt="{{ $product->name }}">
                                        </a>
                               
                                        <div class="product-action">
                                            <div class="addto-wrap">
                                                <a href="" class="add-cart" onclick="addToCart({{ $product->id }});">
                                                    <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                                </a>
                                                <a class="add-wishlist" href="" onclick="addWishlist({{ $product->id }})">
                                                    <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-info">
                                            <a href="{{ route('products.single', $product->id) }}">
                                                <h4 class="title">{{ $product->name }}</h4>
                                            </a>
                                            <div class="product-description">
                                                @php
                                                    $description = $product->description;
                                                    $max_length = 50;
                                                    if (strlen($description) > $max_length) {
                                                        $description = substr($description, 0, $max_length) . '...';
                                                    }
                                                @endphp
                                                <p>{{ $description }}</p>
                                            </div>
                                            <div class="prices">
                                              @if ($product->discount > 0)
                                              <span class="price">{{ $product->price - $product->discount }}</span>
                                              <span class="price-old">${{ $product->price }}</span>
                                              @else
                                              <span class="price">{{ $product->price }}</span>
                                            @endif
                                            </div>
                                            <div class="star-content">
                                              @php
                                              $averageRating = $product->reviews->avg('rating'); 
                                              $maxRating = $product->reviews->max('rating');
                                              $mostCommonRating = $product->reviews
                                                                  ->groupBy('rating')
                                                                  ->sortByDesc(function ($group) {
                                                                      return count($group);
                                                                  })
                                                                  ->keys()
                                                                  ->first();
                                          
                                              $displayRating = ($averageRating >= $maxRating) ? $averageRating : $mostCommonRating;
                                              @endphp
                                              @for ($i = 1; $i <= 5; $i++)
                                              @if ($i <= $displayRating)
                                                <i class="fa fa-star"></i>
                                               @else
                                                <i class="fa fa-star-o"></i>
                                                @endif
                                                @endfor
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
                
                <div class="tab-pane fade" id="newArrivals" role="tabpanel" aria-labelledby="new-arrivals-tab">
                    <div class="row">
                        <!-- Add your new arrivals product list here -->
                    </div>
                </div>
                
                <!--== End Product Area Wrapper ==-->
                
                <!--== Start Product Area Wrapper ==-->
                <section class="product-area product-new-arrivals-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 m-auto">
                                <div class="section-title text-center">
                                    <h2 class="title">New Arrivals</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($latestProduct as $product)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <!-- Start Shop Item -->
                                <div class="product-item">
                                    <div class="inner-content">
                                        <div class="product-thumb">
                                            <a href="{{ route('products.single', $product->id) }}">
                                                <img class="w-100" src="/allFiels/{{ $product->image }}" alt="{{ $product->name }}">
                                            </a>
                                    
                                            <div class="product-action">
                                                <div class="addto-wrap">
                                                    <a href="#" class="add-cart" onclick="addToCart({{ $product->id }});">
                                                        <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                                    </a>
                                                    <a class="add-wishlist" href="#" onclick="addWishlist({{ $product->id }})">
                                                        <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-info">
                                                <a href="{{ route('products.single', $product->id) }}">
                                                    <h4 class="title">{{ $product->name }}</h4>
                                                </a>
                                                <div class="product-description">
                                                    @php
                                                        $description = $product->description;
                                                        $max_length = 50;
                                                        if (strlen($description) > $max_length) {
                                                            $description = substr($description, 0, $max_length) . '...';
                                                        }
                                                    @endphp
                                                    <p>{{ $description }}</p>
                                                </div>
                                                <div class="prices">
                                                  @if ($product->discount > 0)
                                                  <span class="price">{{ $product->price - $product->discount }}</span>
                                                  <span class="price-old">${{ $product->price }}</span>
                                                  @else
                                                  <span class="price">{{ $product->price }}</span>
                                                @endif
                                                </div>
                                                <div class="star-content">
                                                  @php
                                                  $averageRating = $product->reviews->avg('rating'); 
                                                  $maxRating = $product->reviews->max('rating');
                                                  $mostCommonRating = $product->reviews
                                                                      ->groupBy('rating')
                                                                      ->sortByDesc(function ($group) {
                                                                          return count($group);
                                                                      })
                                                                      ->keys()
                                                                      ->first();
                                              
                                                  $displayRating = ($averageRating >= $maxRating) ? $averageRating : $mostCommonRating;
                                                  @endphp
                                                  @for ($i = 1; $i <= 5; $i++)
                                                  @if ($i <= $displayRating)
                                                    <i class="fa fa-star"></i>
                                                   @else
                                                    <i class="fa fa-star-o"></i>
                                                    @endif
                                                    @endfor
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
                </section>
                
              </main>

  
  
    <!--== End Product Area Wrapper ==-->

    @include('layouts.footer')

    <!--=======================Javascript============================-->
{{-- <script>

  function addToCart(event, productId) {
      
      const data = {
          product_id: productId,
          quantity: 1
      };

      axios.post('{{ route('cart.store') }}', data)
          .then(response => {
            console.log(response.data)
          })
          .catch(error => {
              console.error('Error occurred:', error);
              alert('Failed to add product to cart.');
          });
  }
</script> --}}

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  @if(auth()->check())
    var userId = @json(auth()->user()->id);
  @else
    var userId = null; 
  @endif

  function addToCart(productId) {
    if (userId) {
      axios.post(`/api/cart/addtocart`, {
        user_id: userId,
        product_id: productId,
        quantity: 1
      })
      .then(response => {
          console.log(response.data);
          window.location.href='/cart';
      })
      .catch(error => {
          console.error(error);
      });
    } else {

       window.location.href = '/login';
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
     @if(auth()->check())
    var userId = @json(auth()->user()->id);
  @else
    var userId = null; 
  @endif

    function addWishlist(productId) {
     
      if(userId){
        axios.post(`/api/wishlist/addwishlist`,{
        user_id:userId,
        product_id:productId
      })
          .then(response => {
             console.log(response.data)
             window.location.href='/wishlist';
          })
          .catch(error => {
              console.error(error);
          });
      }else{
        window.location.href = '/login';
      }
    }
    </script>
  
@endsection
