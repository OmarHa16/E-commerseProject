@extends('app')

@section('content')

<!-- Hero Section -->
<div class="text-center py-20">
    <h1 class="text-5xl font-bold mb-4 text-indigo-500">Welcome to Your Brand</h1>
    <p class="text-xl mb-8">Discover our featured products and explore our collections.</p>
  </div>

  <!-- Featured Products -->
  <section id="products" class="py-20">
    <h2 class="text-3xl font-bold text-center mb-10 text-indigo-500">Featured Products</h2>
    <div class="flex flex-wrap justify-center">
      <!-- Product Card -->
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>
      <div class="max-w-sm m-4">
        <img src="path/to/product-image.jpg" alt="Product Name" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Product Name</h3>
          <p class="mb-4">Short description of the product.</p>
          <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded">View Product</a>
        </div>
      </div>

      <!-- More Product Cards -->
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-gray-800 text-white py-16">
    <div class="container mx-auto max-w-screen-xl **grid grid-cols-1 justify-center items-center**">
        <h2 class="text-3xl font-bold text-center mb-8 text-indigo-500">About Us</h2>
        <div class="container mx-auto max-w-screen-xl **grid grid-cols-1 justify-center items-center** gap-8">
          <div class="space-y-4">
            <img src="{{ asset('storage/images/23.jpeg') }}" alt="Your Brand Logo" class="w-auto m-auto rounded-lg">
            <p class="text-center text-indigo-500"><strong>23</strong></p>
            <p class="text-lg text-center">
              is a sustainable fashion brand dedicated to providing stylish and eco-friendly clothing. We believe that fashion can be both beautiful and responsible, and we strive to create pieces that are kind to the planet and to your wardrobe.
            </p>
        </div>
          
          
          <div class="space-y-4 ">
                <h3 class="text-2xl font-semibold text-indigo-500" >Our Mission</h3>
                <p class="text-lg">
                  Our mission is to inspire a sustainable fashion revolution by offering stylish, ethical, and affordable clothing. We aim to empower our customers to make conscious choices and contribute to a healthier planet.
                </p>
                <h3 class="text-2xl font-semibold text-indigo-500">Our Values</h3>
                <ul class="list-disc space-y-2">
                    <li>Sustainability: We prioritize sustainable practices throughout our supply chain, from sourcing materials to production processes.</li>
                    <li>Ethical Sourcing: We work with ethical suppliers who prioritize fair labor practices and environmental responsibility.</li>
                    <li>Quality: We are committed to offering high-quality clothing that is built to last.</li>
                    <li>Timeless Design: Our designs are classic and timeless, ensuring that our pieces remain relevant for years to come.</li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

  <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="text-center">
      <h2 class="text-3xl font-bold mb-4 text-indigo-500">Get in Touch</h2>
      <p class="max-w-md mx-auto mb-8">Have questions? Reach out to us via our contact form.</p>
      <a href="/contact" class="bg-blue-500 text-white px-6 py-2 rounded">Contact Us</a>
    </div>
  </section>

@endsection
