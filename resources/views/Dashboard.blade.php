<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete E-commerce Dashboard</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <!-- Header -->
    <header class="bg-gray-800 p-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold">Your Brand</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-300 hover:text-white">Dashboard</a></li>
                <li><a href="#" class="text-gray-300 hover:text-white">Orders</a></li>
                <li><a href="#" class="text-gray-300 hover:text-white">Products</a></li>
                <li><a href="#" class="text-gray-300 hover:text-white">Customers</a></li>
                <li><a href="#" class="text-gray-300 hover:text-white">Reports</a></li>
                <li><a href="#" class="text-gray-300 hover:text-white">Settings</a></li>
            </ul>
        </nav>
    </header>

    <div class="container mx-auto p-8">
        <!-- Sales Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Revenue Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Revenue</h2>
                <p class="text-3xl font-bold">$256K</p>
                <p class="text-gray-400">Last 30 days</p>
            </div>
            <!-- Orders Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Orders</h2>
                <p class="text-3xl font-bold">1,342</p>
                <p class="text-gray-400">Last 30 days</p>
            </div>
            <!-- Average Order Value Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Average Order Value</h2>
                <p class="text-3xl font-bold">$190.50</p>
                <p class="text-gray-400">Last 30 days</p>
            </div>
        </div>

        <!-- Customer Insights -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Customer Feedback Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Customer Feedback</h2>
                <p class="text-lg">Positive: 80%</p>
                <p class="text-lg">Negative: 20%</p>
            </div>
            <!-- Customer Demographics Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Customer Demographics</h2>
                <p class="text-lg">25-34 yrs: 40%</p>
                <p class="text-lg">35-44 yrs: 30%</p>
                <!-- Add more demographics data here -->
            </div>
            <!-- Purchase Behavior Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Purchase Behavior</h2>
                <p class="text-lg">Repeat Customers: 60%</p>
                <p class="text-lg">First-time Buyers: 40%</p>
            </div>
        </div>

        <!-- Inventory Management -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Stock Availability Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Stock Availability</h2>
                <p class="text-lg">Product A: 20</p>
                <p class="text-lg">Product B: 35</p>
                <!-- Add more stock data here -->
            </div>
            <!-- Reorder Points Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Reorder Points</h2>
                <p class="text-lg">Product A: 5</p>
                <p class="text-lg">Product B: 10</p>
                <!-- Add more reorder point data here -->
            </div>
            <!-- Product Popularity Card -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Product Popularity</h2>
                <p class="text-lg">Product A: High</p>
                <p class="text-lg">Product B: Medium</p>
                <!-- Add more popularity data here -->
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Bar Chart Container -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Monthly Sales</h2>
                <canvas id="barChart"></canvas>
            </div>

            <!-- Line Chart Container -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Customer Growth</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Chart.js Scripts -->
    <script>
        // Bar Chart Sample Data
        const barData = {
            labels: ['January', 'February', 'March', 'April'],
            datasets: [{
                label: 'Sales',
                data: [50, 60, 70, 80],
                backgroundColor: 'rgba(59, 130, 246, 0.5)',
                borderColor: 'rgb(59, 130, 246)',
                borderWidth: 1
            }]
        };

        // Line Chart Sample Data
        const lineData = {
            labels: ['January', 'February', 'March', 'April'],
            datasets: [{
                label: 'Customers',
                data: [30, 45, 60, 75],
                fill: false,
                borderColor: 'rgb(16, 185, 129)',
                tension: 0.1
            }]
        };

        // Bar Chart Configuration
        const barConfig = {
            type: 'bar',
            data: barData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeInOutElastic',
                    from: 0.5,
                    loop: true
                }
            }
        };

        // Line Chart Configuration
        const lineConfig = {
            type: 'line',
            data: lineData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeInOutElastic',
                    from: 0.5,
                    loop: true
                }
            }
        };

        // Initialize Charts
        new Chart(document.getElementById('barChart'), barConfig);
        new Chart(document.getElementById('lineChart'), lineConfig);
    </script>

</div>

        <!-- Website Performance -->
        <!-- ... -->

        <!-- Marketing Analytics -->
        <!-- ... -->

        <!-- Fulfillment Metrics -->
        <!-- ... -->

        <!-- Financial Insights -->
        <!-- ... -->
    </div>

    <!-- Include any JavaScript files here -->
</body>
</html>
