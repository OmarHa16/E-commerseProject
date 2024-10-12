@extends('a-app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Product Catalog</h1>
    <button id="addProductBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Product</button>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Actions</th>

            </tr>
        </thead>
        <tbody id="productTableBody">
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
    // Function to fetch and display products
    function fetchProducts() {
        $.ajax({
            url: "{{ route('products.index') }}", // Assuming you have a route named 'products.index'
            method: 'GET',
            success: function(data) {
                $('#productTableBody').empty();
                data.forEach(function(product) {
                    var row = `
                        <tr>
                            <td class="px-4 py-2">${product.id}</td>
                            <td class="px-4 py-2">${product.name}</td>
                            <td class="px-4 py-2">${product.price}</td>
                            <td class="px-4   
 py-2">${product.description}</td>
                            <td class="px-4 py-2">
                                <button class="editProductBtn bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button class="deleteProductBtn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                    `;
                    $('#productTableBody').append(row);
                });
            },
            error: function(error) {
                console.error('Failed to fetch products:', error);
            }
        });
    }

    // Fetch products initially
    fetchProducts();

    // Add product button click handler
    $('#addProductBtn').click(function() {
        // Implement logic to add a new product using an AJAX request
        $.ajax({
            url: "{{ route('products.store') }}", // Assuming you have a route named 'products.store'
            method: 'POST',
            data: {
                // Product data
            },
            success: function(data) {
                console.log('Product added successfully');
                fetchProducts();
            },
            error: function(error) {
                console.error('Failed to add product:', error);
            }
        });
    });

    // Edit product button click handler
    $(document).on('click', '.editProductBtn', function() {
        // Implement logic to edit an existing product using an AJAX request
        var productId = $(this).closest('tr').find('td:first-child').text();
        // ...
    });

    // Delete product button click handler
    $(document).on('click', '.deleteProductBtn', function() {
        // Implement logic to delete a product using an AJAX request
        var productId = $(this).closest('tr').find('td:first-child').text();
        // ...
    });
});
</script>
@endsection