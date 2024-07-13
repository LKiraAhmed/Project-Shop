
@extends('layouts.header')

@section('title', 'About :: Be Unique – Minimal Fashion Bootstrap 5 Template') 

@section('content')
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
                                  @php $total = 0; @endphp
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
                                                  <input type="text" id="quantity {{ $cartItem->id }}" title="Quantity" value="{{ $cartItem->quantity }}" oninput="updateCart({{ $cartItem->id }})">
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
  @include('layouts.footer')

<!--=======================Javascript============================-->
<!-- Include Axios library -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
  async function updateCart(productId) {
      const quantityInput = document.getElementById(`quantity${productId}`);
      const quantity = quantityInput.value;
      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      try {
          const response = await fetch('{{ route('cart.updateCart') }}', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': token
              },
              body: JSON.stringify({
                  product_id: productId,
                  quantity: quantity
              })
          });

          const data = await response.json();

          if (response.ok) {
              console.log(data.message);
          } else {
              console.error(data.message);
          }
      } catch (error) {
          console.error('Error:', error);
      }
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

@endsection
