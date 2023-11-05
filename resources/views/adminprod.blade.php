
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
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

<main class="container mx-auto bg-white rounded-lg p-6 shadow-md mt-8">

       
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-6 border-b pb-2">View Products</h1>
   <div x-data="{ subcategoryId: '' }" class="mb-4">
        <label for="subcategoryFilter" class="block text-sm font-medium text-gray-700 mb-2">Filter by Subcategory:</label>
        <select id="subcategoryFilter" x-on:change="subcategoryId = $event.target.value" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">All Subcategories</option>
        <option value="1">Silk Screen Printing</option>
        <option value="2">Embroidery</option>
        <option value="3">Packaging</option>
        <option value="4">Mylar Bags</option>
        <option value="5">Glass Jars</option>
        <option value="6">Labels/Stickers</option>
        <option value="7">Equipment</option>
        <option value="8">Portfolio</option>
    </select>


    <table class="min-w-full divide-y divide-gray-200 mb-8 table-fixed">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Subcategory
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
        @foreach ($products as $product)
            <tr x-data="{ isEditing: false, EditImage: false }" x-show="!subcategoryId || subcategoryId == '{{ $product->subcategory->id }}'" data-product-id="{{ $product->id }}">
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->id }}</td>

            <!-- Name (editable) -->
            <td class="px-6 py-4 whitespace-nowrap">
                <span x-show="!isEditing">{{ $product->title }}</span>
                <input x-show="isEditing" type="text" value="{{ $product->title }}" class="border p-1">
            </td>

            <!-- Subcategory (non-editable in this example) -->
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->subcategory->name }}</td>

            <!-- Description (editable) -->
          <td class="px-6 py-4 whitespace-nowrap">
    <span x-show="!isEditing" class="inline-block max-w-xs overflow-hidden text-ellipsis whitespace-normal">{{ $product->description }}</span>
    <textarea x-show="isEditing" class="border p-1 max-w-xs">{{ $product->description }}</textarea>
</td>


            <!-- Images and Videos (with add & delete options) -->
            <td class="px-6 py-4 whitespace-nowrap flex">
                @foreach ($product->images as $image)
                <div class="relative">
                    @php
                    $imageUrl = str_replace('public', 'storage', $image->filename);
                    $isImage = strpos($imageUrl, '/image/') !== false;
                    $isVideo = strpos($imageUrl, '/video/') !== false;
                    @endphp

                    @if ($isImage)
                        <img src="{{ asset($imageUrl) }}" alt="{{ $product->title }}" class="w-16 h-16 object-cover mx-2">
                        <button x-show="isEditing" @click="deleteImage('{{ $image->id }}')" class="absolute top-0 right-0 bg-red-600 hover:bg-red-700 text-white rounded-full p-1">X</button>
                    @elseif ($isVideo)
                        <video width="200" height="200" controls>
                            <source src="{{ asset($imageUrl) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <button x-show="isEditing" @click="deleteVideo('{{ $image->id }}')" class="absolute top-0 right-0 bg-red-600 hover:bg-red-700 text-white rounded-full p-1">X</button>
                    @endif
                </div>
                @endforeach

                <div x-show="isEditing">
                    <!-- Provide option to add new media -->
                    <button x-show="!EditImage" @click="EditImage = true" class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded">Add Image/Video</button>

                 
<form x-show="EditImage" id="add-media-form-{{ $product->id }}" enctype="multipart/form-data">
    <!-- Images Field -->
    <div class="mb-4">
        <label for="images" class="block text-sm font-medium text-gray-700 mb-2">Choose Images:</label>
        <input type="file" id="images" name="files[]" accept="image/*" multiple class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
    </div>

    <!-- Videos Field -->
    <div class="mb-4">
        <label for="videos" class="block text-sm font-medium text-gray-700 mb-2">Choose Videos:</label>
        <input type="file" id="videos" name="files[]" accept="video/*" multiple class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
    </div>

    <!-- Submit Button -->
<button @click="editimages('{{ $product->id }}', 'add-media-form-{{ $product->id }}')" class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded">Add Image/Video</button>
</form>
                </div>
     
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <button x-show="!isEditing" @click="isEditing = true" class="text-blue-600 hover:underline ml-2">Update</button>
                <button x-show="isEditing" @click="saveChanges('{{ $product->id }}')" class="text-green-600 hover:underline ml-2">Save</button>
                <button class="text-red-600 hover:underline ml-2 delete-product" data-id="{{ $product->id }}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>



</div>

    <footer>
  
    </footer>
      <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navigation', () => ({
            isOpen: false,
        }));
    });
</script>
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
    return response.text().then(text => {
        return {
            status: response.status,
            statusText: response.statusText,
            body: text
        };
    });
})
.then(result => {
    if (result.status >= 200 && result.status < 300) {
            alert("Successfully deleted!"); // Display a popup to the user
            location.reload();
    } else {
        console.error(`Failed to delete product: ${result.body}`);
         alert(`Failed to delete product: ${result.body}`);
    }
})
.catch(error => {
    console.error('Error:', error);
});
        });
    });
</script>

<script>
    function deleteImage(imageId) {
        if (confirm('Are you sure you want to delete this image?')) {
            // Make an AJAX DELETE request to your backend to delete the image
            fetch(`/admin/products/deleteImage/${imageId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Image deleted successfully!');
                    location.reload(); // Reload to reflect the change
                } else {
                 alert('Failed to delete image. ' + (data.message || ''));
                }
            });
        }
    }

    function deleteVideo(videoId) {
        if (confirm('Are you sure you want to delete this video?')) {
            // Make an AJAX DELETE request to your backend to delete the video
            fetch(`/admin/products/deleteVideo/${videoId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Video deleted successfully!');
                    location.reload(); // Reload to reflect the change
                } else {
                    alert('Failed to delete video.');
                }
            });
        }
    }

    function saveChanges(productId) {
        // Get the updated name and description from the input and textarea
     const productRow = document.querySelector(`tr[data-product-id="${productId}"]`);
    const updatedName = productRow.querySelector('input').value;
    const updatedDescription = productRow.querySelector('textarea').value;

        // Make an AJAX POST request to update the product details
        fetch(`/admin/products/updateProduct/${productId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
            },
            body: JSON.stringify({
                name: updatedName,
                description: updatedDescription
            })
        })
        .then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    return response.json();
})
        .then(data => {
    if (data.success) {
        alert('Product updated successfully!');
        location.reload();
    } else {
        alert(`Failed to update product: ${data.message}`);
    }
})
.catch(error => {
    console.error('Fetch error: ', error);
    alert('An error occurred while updating the product.');
});
    }
</script>

<script>


function editimages(productId, formId) {
    const form = document.getElementById(formId);
    const formData = new FormData(form);

    // Make an AJAX POST request to the add images route with the product ID and form data
    fetch(`/admin/products/addImagesToProduct/${productId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
        },
        body: formData // Send the form data
    })
    .then(response => {
        if (!response.ok) {
            // Instead of throwing an Error, we handle it directly
            response.text().then(text => {
                try {
                    // Attempt to parse it as JSON
                    const data = JSON.parse(text);
                    alert(data.message || 'Error: The server did not send a JSON response.');
                } catch (e) {
                    // If it's not JSON, it's probably an HTML response or plain text
                    alert('Server Error: ' + text);
                }
            });
        } else {
            return response.json(); // Parse the JSON response
        }
    })
    .then(data => {
        if (data && data.message) {
            alert(data.message); // Display the server's response message
            location.reload(); // Reload the page to reflect the changes
        }
    })
    .catch(error => {
        // This will handle network errors or other exceptions not related to the server's response
        alert(error.message);
        console.log(error.message);
    });
}


</script>
