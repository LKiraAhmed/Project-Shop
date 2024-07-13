
@extends('layouts.header')

@section('title', 'About :: Be Unique – Minimal Fashion Bootstrap 5 Template') 

@section('content')

      
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
          
          <div class="product-body-wrap">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                <div class="row">

                  <!-- Loop through products -->
                  
                  @foreach ($products as $product)
                  <div class="col-sm-6 col-lg-4">
                    <!--== Start Shop Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="{{ route('products.single', $product->id) }}">
                            <img class="w-100" src="/allFiels/{{$product->image}}" alt="{{ $product->name }}">
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
                    <!--== End Shop Item ==-->
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Product Area Wrapper ==-->
</main>


    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    @include('layouts.footer')

{{-- 
    @section('footer')
    @endsection --}}



<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
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
    @endsection
