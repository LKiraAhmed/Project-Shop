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
                              <li>Search</li>
                          </ul>
                      </nav>
                      <h4 class="title">Search</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start Search Area Wrapper ==-->
  <section class="search-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8 m-auto">
                  <div class="search-form-wrap">
                      <div class="search-form">
                          <div class="content">
                              <h4 class="title">Search for products on our site</h4>
                          </div>
                          <form action="{{ route('products.search') }}" method="GET">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input class="form-control" type="search" name="search" placeholder="Search our store">
                                          <button class="btn-search" type="submit">Search</button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Search form -->

<!--== Start Search Results Wrapper ==-->
<section class="search-results-area">
  <div class="container">
      @if (request()->has('search') && isset($products))
          @if ($products->isEmpty())
              <p>No products found.</p>
          @else
              <div class="row">
                  @foreach ($products as $product)
                      <div class="col-md-4">
                          <div class="product-item">
                            <a href="{{ route('products.single', $product->id) }}">
                              <img class="w-80" src="/allFiels/{{$product->image}}" alt="{{ $product->name }}">
                          </a>
                          <h4>{{ $product->name }}</h4>
                              <?php
                                  $description = $product->description;
                                  $max_length = 100; 
                                  if (strlen($description) > $max_length) {
                                      $description = substr($description, 0, $max_length) . '...';
                                  }
                              ?>
                              <p>{{ $description }}</p>
                              @if ($product->discount > 0)
                              <p >{{ $product->price - $product->discount }}</span>
                              @else
                              <p >{{ $product->price }}</span>
                            @endif
                          </div>
                      </div>
                  @endforeach
              </div>
          @endif
      @endif
  </div>
</section>
@include('layouts.footer')


  <!--== End Search Results Wrapper ==-->
</main>

@endsection
