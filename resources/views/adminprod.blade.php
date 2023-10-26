
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krystal Graphics Admin</title>

    <link rel="stylesheet" href="../../css/app.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
 
</head>
<body>

        <main class=""> 

       
<div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">View Products</h1>

<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Images
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop through products and display each row -->
        @foreach ($products as $product)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->title }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->description }}</td>
            <td class="px-6 py-4 whitespace-nowrap flex">
                <!-- Loop through product images and display them in a row -->
               @foreach ($product->images as $image)
    @php
    $imageUrl = str_replace('public', 'storage', $image->filename);
    @endphp
    <img src="{{ asset($imageUrl) }}" alt="{{ $product->title }}" class="w-16 h-16 object-cover mx-2">
@endforeach
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <!-- Add buttons for actions like Update and Delete -->
                <button class="text-blue-600 hover:underline ml-2">Update</button>
                <button class="text-red-600 hover:underline ml-2 delete-product" data-id="{{ $product->id }}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

    <footer>
  
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // Add a click event listener to all elements with the "delete-product" class
    document.querySelectorAll('.delete-product').forEach(function (button) {
        button.addEventListener('click', function () {
            const productId = this.getAttribute('data-id'); // Get the product ID from the button's data-id attribute

            // Make an AJAX DELETE request to the delete route with the product ID
        fetch(`/admin/products/deleteProduct/${productId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
                },
            })
            .then(response => {
                if (response.ok) {
                    // Product deleted successfully, you can handle this as needed (e.g., remove the row from the table)
                    // Reload the page or update the UI to reflect the changes
                    location.reload();
                } else {
                    // Handle the case where the delete request fails (e.g., show an error message)
                    console.error('Failed to delete product');
                
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>