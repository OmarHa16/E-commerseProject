
@extends('app')

@section('content')

<div class="container mx-auto px-4 py-8">   

    <h1 class="text-3xl font-bold text-indigo-500 text-center">My Wishlist</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="bg-gray-800 p-4 rounded-lg">
        <img src="product1.jpg" alt="Product 1" class="w-full h-48 object-cover rounded-lg mb-4">
        <h2 class="text-xl font-semibold text-white">Product 1</h2>
        <p class="text-gray-400">Description of Product 1</p>
        <div class="flex justify-between mt-4">
          <p class="text-gray-400">Price: $19.99</p>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add to Cart</button>
        </div>
      </div>
@endsection