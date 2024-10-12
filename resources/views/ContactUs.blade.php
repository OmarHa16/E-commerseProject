@extends('app')

@section('content')
     <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="text-center">
      <h2 class="text-4xl font-bold mb-6 text-indigo-500">Get in Touch</h2>
      <p class="max-w-2xl mx-auto mb-10 text-lg">We're here to help and answer any question you might have. We look forward to hearing from you.</p>
      <div class="max-w-lg mx-auto bg-gray-700 p-8 rounded-lg shadow-lg">
        <form action="/send-message" method="POST">
          <div class="mb-6">
            <label for="name" class="block mb-2 font-semibold">Name</label>
            <input type="text" id="name" name="name" class="w-full p-3 bg-gray-800 border border-gray-600 rounded focus:outline-none focus:border-indigo-500 transition-colors" required>
          </div>
          <div class="mb-6">
            <label for="email" class="block mb-2 font-semibold">Email</label>
            <input type="email" id="email" name="email" class="w-full p-3 bg-gray-800 border border-gray-600 rounded focus:outline-none focus:border-indigo-500 transition-colors" required>
          </div>
          <div class="mb-6">
            <label for="message" class="block mb-2 font-semibold">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full p-3 bg-gray-800 border border-gray-600 rounded focus:outline-none focus:border-indigo-500 transition-colors" required></textarea>
          </div>
          <button type="submit" class="w-full bg-indigo-500 text-white px-6 py-3 rounded hover:bg-indigo-600 transition-colors">Send Message</button>
        </form>
      </div>
    </div>
  </section>

@endsection

