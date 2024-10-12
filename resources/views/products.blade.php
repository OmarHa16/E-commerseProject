@extends('app')

@section('content')


  <!-- Products Grid -->
  <div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12">
      <!-- Product 1 -->
      <a href="/product/elegant-timepiece" class="block bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <img class="w-full h-64 object-cover" src="path/to/fake-product-1.jpg" alt="Elegant Timepiece">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-indigo-400">Elegant Timepiece</h3>
          <p class="text-gray-400 text-sm my-2">A sophisticated wristwatch with a sleek design.</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-lg font-bold text-indigo-300">$249.99</span>
          </div>
        </div>
      </a>
      <!-- Product 2 -->
      <a href="/product/vintage-backpack" class="block bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <img class="w-full h-64 object-cover" src="path/to/fake-product-2.jpg" alt="Vintage Canvas Backpack">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-indigo-400">Vintage Canvas Backpack</h3>
          <p class="text-gray-400 text-sm my-2">Retro-inspired backpack made with high-quality canvas.</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-lg font-bold text-indigo-300">$89.99</span>
          </div>
        </div>
      </a>
      <!-- Product 3 -->
      <a href="/product/wireless-earbuds" class="block bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <img class="w-full h-64 object-cover" src="path/to/fake-product-3.jpg" alt="Wireless Earbuds">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-indigo-400">Wireless Earbuds</h3>
          <p class="text-gray-400 text-sm my-2">Compact and convenient earbuds with high-quality sound.</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-lg font-bold text-indigo-300">$129.99</span>
          </div>
        </div>
      </a>
    </div>
  </div>


@endsection
