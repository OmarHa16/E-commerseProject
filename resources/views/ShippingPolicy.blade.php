@extends('app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="text-lg font-semibold">Shipping Methods</h3>
                <p>We offer the following shipping methods:</p>
                <ul>
                    <li>Standard Shipping</li>
                    <li>Expedited Shipping</li>
                </ul>

                <h3 class="text-lg font-semibold">Shipping Costs</h3>
                <p>Shipping costs are calculated based on the weight and destination of your order. You can view the estimated shipping cost during the checkout process.</p>

                <h3 class="text-lg font-semibold">Shipping Times</h3>
                <p>Standard shipping typically takes 3-5 business days, while expedited shipping takes 1-2 business days. Please note that these are estimated delivery times and may vary depending on your location and the availability of products.</p>

                <h3 class="text-lg font-semibold">Tracking Your Order</h3>
                <p>Once your order is shipped, you will receive a tracking number via email. You can use this tracking number to monitor the progress of your shipment.</p>   


                <h3 class="text-lg font-semibold">International Shipping</h3>
                <p>We currently ship to the following countries: [List of countries]</p>
                <p>Please note that international shipping times and costs may vary. Import duties and taxes may also apply.</p>
            </div>
        </div>
    </div>
</div>

@endsection