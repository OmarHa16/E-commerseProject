@extends('app')
<style>
    .carousel {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
    }
    .carousel-item {
      flex: none;
      width: 100%;
      scroll-snap-align: start;
    }
  </style>

@section('content')
<div class="container mx-auto p-6">
    <div class="max-w-2xl mx-auto bg-gray-800 rounded-xl shadow-md overflow-hidden">
      <div class="carousel">
        <!-- Repeat this div for each image in your carousel -->
        <div class="carousel-item">
          <img class="w-full object-cover" src="/path/to/product-image-1.jpg" alt="Product Image 1">
        </div>
        <!-- ... other images ... -->
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Category</div>
        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-white hover:underline">Product Name</a>
        <p class="mt-2 text-gray-400">This area is dedicated to the product description. Provide details about the product, such as its features, benefits, and any other relevant information that would entice a customer to make a purchase.</p>
        <div class="mt-4">
          <span class="product-price text-xl font-bold text-white-500">$19.99</span>
          <span class="text-teal-200 inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-teal-600 rounded-full">New</span>
          <span class="text-teal-200 inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-teal-600 rounded-full">Sale</span>
        </div>
      </div>
    </div>
  </div>
@endsection
