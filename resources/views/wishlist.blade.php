@extends('layouts.admin')

@section('title', 'Remos eCommerce Admin Dashboard HTML Template') 

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
                  <li>wishlist</li>
                </ul>
              </nav>
              <h4 class="title">wishlist</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Wishlist Area Wrapper ==-->
    <section class="product-area product-wishlist-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="shopping-wishlist-table table-responsive">
                      <table class="table text-center">
                          <thead>
                              <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumb">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-action">&nbsp;</th>                                
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($wishlistItems as $item)
                                  <tr class="cart-wishlist-item">
                                      <td class="product-remove">
                                          <form action="{{ route('wishlist.destroy', $item->product_id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              {{-- onclick="deleteWishlist({{$item->product_id}})" --}}
                                              <button type="submit"    class="btn-wishlist">
                                                <i class="fa fa-trash-o">
                                                  </i></button>
                                          </form>
                                      </td>
                                      <td class="product-thumb">
                                          <a href="{{ route('products.single', $item->product->id) }}">
                                              <img src="/allFiels/{{$item->product->image}}" >
                                          </a>
                                      </td>
                                      <td class="product-name">
                                          <h4 class="title">
                                            <a href="{{ route('products.single', $item->product->id) }}"> {{ $item->product->name }}  </a>
                                          </h4>
                                      </td>
                                      <td class="product-price">
                                          <span class="price">${{ $item->product->price }}</span>
                                      </td>
                                      <td class="product-action">
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn-cart">
                                                <span class="price">ADD TO CART</span>
                                            </button>
                                        </form>
                                    </td>
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="5">No items in wishlist.</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!--== End Wishlist Area Wrapper ==-->
  </main>

 
  @section('footer')
  @endsection


<!--=======================Javascript============================-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
  function deleteWishlist(wishlistid) {
   
          axios.delete(`/wishlist/${wishlistid}`, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }})
          .then(response => {
             console.log(response) 
          })
          .catch(error => {
              console.error(error);
          });
      
  }
  </script>
  @endsection
