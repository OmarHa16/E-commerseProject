@extends('app')

@section('content')

<div class="cart-container p-8">
    <h1 class="text-3xl font-bold text-center">Your Shopping Cart</h1>
    <div class="cart-items grid grid-cols-12 gap-4">
      <div class="cart-item col-span-12 md:col-span-4">
        <img src="product1.jpg" alt="Product 1" class="w-full h-48 object-cover">
        <h2 class="text-lg font-medium mt-2">Product Name 1</h2>
        <p class="text-gray-500">Product description</p>
        <div class="flex items-center justify-between mt-4">
          <div class="quantity-control">
            <button class="decrease">-</button>
            <input type="number" value="1" class="quantity-input">
            <button class="increase">+</button>
          </div>
          <span class="product-price text-xl font-bold text-red-500">$19.99</span>
        </div>
      </div>
  
      <div class="cart-item col-span-12 md:col-span-4">
        </div>
  
      </div>
  
    <div class="cart-summary col-span-12 mt-8">
      <h2 class="text-2xl font-bold">Cart Summary</h2>
      <div class="flex justify-between">
        <span>Subtotal:</span>
        <span class="product-price text-xl font-bold text-red-500">$39.98</span>
      </div>
      <div class="flex justify-between">
        <span>Shipping:</span>
        <span class="product-price text-xl font-bold text-red-500">$5.00</span>
      </div>
      <div class="flex justify-between">
        <span>Total:</span>
        <span class="product-price text-2xl font-bold text-red-500">$44.98</span>
      </div>
      <button class="checkout-button bg-blue-500 text-white px-4 py-2 rounded-md mt-4">Checkout</button>
    </div>
  </div>




@endsection