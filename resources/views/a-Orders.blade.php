


<?php
$orders = array( array(1,'Omar', 234, "pending"), array(2,'soso', 432, "pending"));
?>
@extends('a-app')
@section('content')

<body class="bg-gray-900 text-white">
    <div class="container mx-auto p-4">
      <h1 class="text-3xl font-bold mb-8">Admin Dashboard</h1>
  
      <div class="bg-gray-800 rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Orders</h2>
        <div class="overflow-x-auto">
        <table class="table-auto w-full">
          <thead>
            <tr>
              <th class="px-4 py-2">Order ID</th>
              <th class="px-4 py-2">Customer Name</th>
              <th class="px-4 py-2">Order Date</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
              <tr>
                <td class="border px-4 py-2">{{ $order[0] }}</td>
                <td class="border px-4 py-2">{{ $order[1] }}</td>
                <td class="border px-4 py-2">{{ $order[2] }}</td>
                <td class="border px-4 py-2">
                  <span class="inline-block px-2 py-1 rounded-full {{ $order[3] === 'pending' ? 'bg-yellow-600' : ($order[3] === 'shipped' ? 'bg-green-500' : 'bg-red-500') }}">
                    {{ $order[3] }}
                  </span>
                </td>
                <td class="border px-4 py-2">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</button>
                  <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div> 
  
    </div>

@endsection

