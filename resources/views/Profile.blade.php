@extends('app')

@section('content')
<div class="container mx-auto p-6">
    <div class="max-w-lg mx-auto bg-gray-800 rounded-xl shadow-md overflow-hidden p-6">
      <form action="/update-profile" method="POST">
        <!-- Personal Information -->
        <h3 class="text-xl font-semibold mb-4">Personal Information</h3>
        <div class="mb-4">
          <label for="fullName" class="block mb-2 text-sm font-medium text-gray-300">Full Name</label>
          <input type="text" id="fullName" name="fullName" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="John Doe">
        </div>
        <div class="mb-4">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email Address</label>
          <input type="email" id="email" name="email" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="john.doe@example.com">
        </div>
        <div class="mb-4">
          <label for="phone" class="block mb-2 text-sm font-medium text-gray-300">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="+1234567890">
        </div>

        <!-- Address Information -->
        <h3 class="text-xl font-semibold mb-4 mt-6">Address Information</h3>
        <div class="mb-4">
          <label for="address" class="block mb-2 text-sm font-medium text-gray-300">Address</label>
          <input type="text" id="address" name="address" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="1234 Street Name">
        </div>
        <div class="mb-4">
          <label for="city" class="block mb-2 text-sm font-medium text-gray-300">City</label>
          <input type="text" id="city" name="city" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="City">
        </div>

        <div class="mb-4">
          <label for="country" class="block mb-2 text-sm font-medium text-gray-300">Country</label>
          <input type="text" id="country" name="country" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="Country">
        </div>

        <!-- Payment Information -->
        <h3 class="text-xl font-semibold mb-4 mt-6">Payment Information</h3>
        <div class="mb-4">
          <label for="cardName" class="block mb-2 text-sm font-medium text-gray-300">Name on Card</label>
          <input type="text" id="cardName" name="cardName" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="John Doe">
        </div>
        <div class="mb-4">
          <label for="cardNumber" class="block mb-2 text-sm font-medium text-gray-300">Card Number</label>
          <input type="text" id="cardNumber" name="cardNumber" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="1234 5678 9012 3456">
        </div>
        <div class="flex justify-between">
          <div class="mb-4 w-1/2 mr-2">
            <label for="expDate" class="block mb-2 text-sm font-medium text-gray-300">Expiration Date</label>
            <input type="text" id="expDate" name="expDate" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="MM/YY">
          </div>
          <div class="mb-4 w-1/2 ml-2">
            <label for="cvv" class="block mb-2 text-sm font-medium text-gray-300">CVV</label>
            <input type="text" id="cvv" name="cvv" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg block w-full p-2.5" placeholder="123">
          </div>
        </div>

        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save Changes</button>
      </form>
    </div>
  </div>
@endsection
