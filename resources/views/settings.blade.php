@extends('app')

@section('content')

<div class="container mx-auto px-4 py-8">   

    <h1 class="text-3xl font-bold text-center text-indigo-500 hover:text-indigo-400">Account Settings</h1>
      <div class="bg-gray-800 p-4 rounded-lg">
        <h2 class="text-2xl font-semibold text-white">Password</h2>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Change Password</button>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg">
        <h2 class="text-2xl font-semibold text-white">Location</h2>
        <p class="text-gray-400">Your Current Location</p>
        <select class="appearance-none bg-gray-900 text-gray-400 px-4 py-2 rounded-lg mt-2">
            <option value="sy">Syira</option>
            <option value="le">lebanon</option>
            </select>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Change Location</button>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg">
        <h2 class="text-2xl font-semibold text-white">Language</h2>
        <select class="appearance-none bg-gray-900 text-gray-400 px-4 py-2 rounded-lg mt-2">
          <option value="en">English</option>
          <option value="fr">French</option>
          <option value="ar">Arabic</option>
          </select>
      </div>

      <div class="bg-gray-800 p-4 rounded-lg col-span-2">
        <h2 class="text-2xl font-semibold text-white">Order History</h2>
        <ul class="text-gray-400 mt-4">
          </ul>
      </div>
    </div>
  </div>

  @endsection