@extends('app')

@section('content')
<div class="checkout-container p-8 bg-gray-900 rounded-lg shadow-md">
  <h1 class="text-3xl font-bold text-indigo-600 text-center">Checkout</h1>

  <div class="billing-section text-center space-y-4 mt-4">
    <h2 class="text-2xl font-bold text-indigo-500">Billing Information</h2>
    <form>
      <div class="form-group mb-4">
        <label for="name" class="block text-gray-400 font-semibold font-bold text-2xl">Name</label>
        <input type="text" id="name" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your full name">
      </div>
      <div class="form-group mb-4">
        <label for="email" class="block text-gray-400 font-semibold font-bold text-2xl">Email</label>
        <input type="email" id="email" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your email address">
      </div>
      <div class="form-group mb-4">
        <label for="address" class="block text-gray-400 font-semibold font-bold text-2xl">Address</label>
        <textarea id="address" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your street address"></textarea>
      </div>
      <div class="form-group mb-4">
        <label for="city" class="block text-gray-400 font-semibold font-bold text-2xl">City</label>
        <input type="text" id="city" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your city">
      </div>
      <div class="form-group mb-4">
        <label for="state" class="block text-gray-400 font-semibold font-bold text-2xl">State</label>
        <select id="state" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500">
          <option value="">Select a state</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          </select>
      </div>
      <div class="form-group mb-4">
        <label for="zip" class="block text-gray-400 font-semibold font-bold text-2xl">ZIP code</label>
        <input type="text" id="zip" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your ZIP code">
      </div>
    </form>
  </div>

  <div class="payment-section text-center space-y-2 mt-6">
    <h2 class="text-2xl font-bold text-indigo-500">Payment Information</h2>
    <div class="payment-options">
      <label for="card-number" class="block text-gray-400 font-semibold font-bold text-2xl">Card Number</label>
      <input type="text" id="card-number" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your card number">
      <div class="card-expiry grid gap-3 my-6 text-center">
        <label for="card-expiry-month" class="block text-gray-400 font-semibold font-bold text-2xl">Expiration Date</label>
        <select id="card-expiry-month" class="w-1/3 px-2 py-1 text-black border rounded-lg focus:outline-none focus:border-blue-500 mx-auto">
          <option value="">Select a month</option>
          <option value="01">January</option>
          <option value="02">February</option>
          </select>
        <select id="card-expiry-year" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500 mx-auto">
          <option value="">Select a year</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
          </select>
      </div>
      <label for="card-cvc" class="block text-gray-400 font-semibold font-bold text-2xl">CVC</label>
      <input type="text" id="card-cvc" class="w-1/3 px-3 py-2 text-black border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your CVC">
    </div>
  </div>

  <div class="order-summary text-center my-6">
    <h2 class="text-2xl font-bold text-indigo-500">Order Summary</h2>
  <button class="checkout-button w-1/3 bg-blue-500 text-white px-4 py-2 rounded-md mt-5 hover:bg-blue-600">Place Order</button>
</div>
@endsection