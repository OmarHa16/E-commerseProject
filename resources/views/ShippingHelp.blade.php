@extends('app')
@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-8 text-indigo-500 text-center">Shipping Help & Information</h2>
    <div class="space-y-6">
      <!-- Shipping Policy -->
      <div class="bg-gray-800 rounded-xl shadow-md p-6 text-center">
        <h3 class="text-2xl font-bold mb-4 text-indigo-500">Shipping Policy</h3>
        <p class="text-gray-400 mb-4">Learn about our shipping methods, costs, and delivery times.</p>
        <a href="#" class="text-blue-500 hover:underline">View Shipping Policy</a>
      </div>
      <!-- FAQ -->
      <div class="bg-gray-800 rounded-xl shadow-md p-6 text-center">
        <h3 class="text-2xl font-bold mb-4 text-indigo-500">Frequently Asked Questions</h3>
        <p class="text-gray-400 mb-4">Get answers to common questions about shipping.</p>
        <a href="#" class="text-blue-500 hover:underline">View FAQs</a>
      </div>
      <!-- Contact Support -->
      <div class="bg-gray-800 rounded-xl shadow-md p-6 text-center">
        <h3 class="text-2xl font-bold mb-4 text-indigo-500 text-center">Need More Help?</h3>
        <p class="text-gray-400 mb-4">Contact our support team for further assistance.</p>
        <a href="#" class="text-blue-500 hover:underline">Contact Support</a>
      </div>
    </div>
  </div>
@endsection
