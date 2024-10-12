@extends('a-app')

@section('content')


<body class="bg-gray-900 text-white">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold mb-4 text-indigo-500">Order #12345</h1>
            <select id="orderStatus" class="border border-gray-700 rounded-md px-4 py-2 bg-indigo-400 focus:text-black">
                <option value="pending">Pending</option>
                <option value="processing">Processing</option>
                <option value="shipped">Shipped</option>
                <option value="delivered">Delivered</option>
                <option value="canceled">Canceled</option>
            </select>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="border rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Customer Information</h2>
                <p>Name: John Doe</p>
                <p>Email: johndoe@example.com</p>
                <p>Address: 123 Main St, City, State, ZIP</p>
            </div>
            <div class="border rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Order Summary</h2>
                <ul class="space-y-2">
                    <li class="flex justify-between">
                        <span>Item 1: Quantity 2, Price $10.00</span>
                        <span>$20.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Item 2: Quantity 1, Price $20.00</span>
                        <span>$20.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Subtotal</span>
                        <span>$40.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Shipping</span>
                        <span>$5.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Total</span>
                        <span>$45.00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

@endsection