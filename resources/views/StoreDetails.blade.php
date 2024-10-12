@extends('app')

@section('content')
<div class="container mx-auto p-6">
    <div class="text-center mb-12">
      <h1 class="text-5xl font-bold text-indigo-500 text-center mb-4">About Us</h1>
      <p class="text-gray-400 max-w-md mx-auto">Discover the story behind our brand, our mission, and the people who make it all happen.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Our Story -->
      <div class="bg-gray-800 rounded-xl shadow-lg p-6">
        <h2 class="text-3xl font-bold text-white mb-3">Our Story</h2>
        <p class="text-gray-400">Founded in 2024, our journey began with a vision to revolutionize online shopping. We've grown from a small startup to a leading e-commerce platform thanks to our commitment to quality and innovation.</p>
      </div>

      <!-- Our Mission -->
      <div class="bg-gray-800 rounded-xl shadow-lg p-6">
        <h2 class="text-3xl font-bold text-white mb-3">Our Mission</h2>
        <p class="text-gray-400">We aim to provide an unparalleled shopping experience by offering a vast selection of products, competitive pricing, and outstanding customer service.</p>
      </div>
    </div>

    <div class="mt-8">
      <!-- Why Choose Us -->
      <div class="bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white mb-3">Why Choose Us</h2>
        <ul class="text-gray-400 list-disc list-inside">
          <li>Extensive product range</li>
          <li>Secure payment options</li>
          <li>Fast shipping and easy returns</li>
          <li>Customer-centric support</li>
          <li>Exclusive deals and discounts</li>
        </ul>
      </div>

      <!-- Meet the Team -->
      <div class="bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white mb-3">Meet the Team</h2>
        <p class="text-gray-400">Our team is a blend of industry veterans and innovative thinkers dedicated to bringing you the best online shopping experience.</p>
      </div>

      <!-- Get in Touch -->
      <div class="bg-gray-800 rounded-xl shadow-lg p-6">
        <h2 class="text-3xl font-bold text-white mb-3">Get in Touch</h2>
        <p class="text-gray-400">We're here to help! If you have any questions or feedback, don't hesitate to reach out to our friendly customer service team.</p>
      </div>
    </div>
  </div>
@endsection
