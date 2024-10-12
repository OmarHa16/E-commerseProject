@extends('app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-8 text-center">Our Stores Around the World</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Store Card 1 -->
      <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
        <img class="w-full h-48 object-cover" src="/path/to/store-image-1.jpg" alt="Store Image 1">
        <div class="p-6">
          <h3 class="text-2xl font-bold mb-2">Store Name 1</h3>
          <p class="text-gray-400">123, Main Street, City, Country</p>
          <p class="text-gray-400">Open Hours: 9am - 9pm</p>
          <p class="text-gray-400">Phone: +123456789</p>
          <p class="text-gray-400">Email: store1@example.com</p>
        </div>
      </div>
      <!-- Store Card 2 -->
      <!-- Repeat the store card for each store location -->
      <!-- ... other stores ... -->
    </div>
  </div>
@endsection
