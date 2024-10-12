@extends('app')
@section('content')
<!-- Categories Grid -->
<div class="container mx-auto px-6 py-12">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-indigo-500">Our Categories</h1>
      <p class="text-gray-400">Explore our wide range of products by category.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12">
      <!-- Category 1 -->
      <a href="/category/electronics" class="block bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <img class="w-full h-64 object-cover" src="path/to/category-image-1.jpg" alt="Electronics">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-indigo-400">Electronics</h3>
          <p class="text-gray-400 text-sm my-2">Latest gadgets and tech gear.</p>
        </div>
      </a>
      <!-- Category 2 -->
      <a href="/category/apparel" class="block bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <img class="w-full h-64 object-cover" src="path/to/category-image-2.jpg" alt="Apparel">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-indigo-400">Apparel</h3>
          <p class="text-gray-400 text-sm my-2">Fashionable clothing and accessories.</p>
        </div>
      </a>
      <!-- Category 3 -->
      <a href="/category/home-goods" class="block bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <img class="w-full h-64 object-cover" src="path/to/category-image-3.jpg" alt="Home Goods">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-indigo-400">Home Goods</h3>
          <p class="text-gray-400 text-sm my-2">Decor and essentials for your home.</p>
        </div>
      </a>
      <!-- More categories... -->
    </div>
  </div>
@endsection
