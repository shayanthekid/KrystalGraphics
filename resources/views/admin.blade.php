@extends('layouts.admin')

@section('content')


    <!-- Create Banner Section -->
    <div class="container mx-auto bg-white rounded-lg p-6 shadow-md mb-8">
        <h1 class="text-3xl font-semibold mb-6 border-b pb-2">Create Banner</h1>

        <!-- Banner Creation Form -->
        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title:</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                @error('title')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image:</label>
                <input type="file" id="image" name="image" class="mt-1 w-full p-2 border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                @error('image')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-800">Create Banner</button>
        </form>
    </div>

    <!-- View Banners Section -->
    <div class="container mx-auto bg-white rounded-lg p-6 shadow-md">
        <h1 class="text-3xl font-semibold mb-6 border-b pb-2">Banners</h1>

        <!-- Table to Display Banners -->
        <table class="min-w-full bg-white divide-y divide-gray-200 mt-4 rounded-lg shadow-sm">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($banners as $banner)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $banner->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ asset($banner->image_path) }}" alt="{{ $banner->title }}" class="w-16 h-16 object-cover">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-red-600 hover:underline delete-banner" data-id="{{ $banner->id }}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<div class="container mx-auto bg-white rounded-lg p-6 shadow-md mb-8">
    <h1 class="text-3xl font-semibold mb-6 border-b pb-2">Upload Product</h1>

    <form method="POST" action="{{ route('admin.products.uploadproduct') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name:</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300" placeholder="Enter Product Name" required>
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description:</label>
            <textarea id="description" name="description" rows="4" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300" placeholder="Enter Product Description" required></textarea>
        </div>

        <!-- Subcategory Field -->
        <div class="mb-4">
            <label for="subcategory_id" class="block text-sm font-medium text-gray-700 mb-2">Category:</label>
            <select id="subcategory_id" name="subcategory_id" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                <option value="1">Silk Screen Printing</option>
                <option value="2">Embroidery</option>      
                <option value="3">Packaging</option>
                <option value="4">Mylar Bags</option>
                <option value="5">Glass Jars / Tubes</option>
                <option value="6">Labels / Decals</option>
                <option value="7">Equipment</option>
                <option value="8">Portfolio</option>
                <!-- ...other options... -->
            </select>
        </div>

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

        <div id="media-preview" class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"></div>

        <!-- Progress Bar -->
        <div id="progress-container" class="mt-4 bg-gray-100 h-2 rounded-md">
            <div id="progress-bar" class="w-0 h-2 bg-blue-500 rounded-md"></div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-800">Submit</button>
            <div id="status-message" class="text-green-600 mt-2"></div>
        </div>
    </form>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    const imagePreview = document.getElementById('image-preview');
    const progressBar = document.getElementById('progress-bar');
    const progressContainer = document.getElementById('progress-container');
    const maxFileSize = 40 * 1024 * 1024; // 40MB in bytes

    const fileInput = document.querySelector('input[type="file"]');

    fileInput.addEventListener('change', (event) => {
        imagePreview.innerHTML = '';

        const files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            if (file.size > maxFileSize) {
                alert('File size exceeds the maximum limit (40MB).');
                fileInput.value = ''; // Clear the file input
                return;
            }

            const reader = new FileReader();

            reader.onload = (e) => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-24', 'h-24', 'object-cover');
                imagePreview.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    });

    $('form').submit(function (event) {
        event.preventDefault();

        const formData = new FormData(this);

        let isFileTooLarge = false;

        // Check file sizes
        formData.getAll('files[]').forEach(function (file) {
            if (file.size > maxFileSize) {
                isFileTooLarge = true;
            }
        });

        if (isFileTooLarge) {
            alert('File size exceeds the maximum limit (40MB).');
            return;
        }

        $.ajax({
            url: this.action,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            xhr: function () {
                const xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function (e) {
                    if (e.lengthComputable) {
                        const uploadPercentage = (e.loaded / e.total) * 100;
                        progressBar.style.width = uploadPercentage + '%';
                    }
                }, false);
                return xhr;
            },
            success: function (response) {
                // Display a success message to the user
                $("#status-message").text("Product added successfully").removeClass('text-red-600').addClass('text-green-600');
            },
            error: function (xhr, status, error) {
                // Display an error message to the user
                $("#status-message").text("Error: " + error).removeClass('text-green-600').addClass('text-red-600');
            },
        });
    });
</script>

  <script>
    // Add a click event listener to all elements with the "delete-banner" class
    document.querySelectorAll('.delete-banner').forEach(function (button) {
        button.addEventListener('click', function () {
            const bannerId = this.getAttribute('data-id'); // Get the banner ID from the button's data-id attribute

            // Make an AJAX DELETE request to the delete route with the banner ID
            fetch(`/admin/banners/${bannerId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
                },
            })
            .then(response => {
                if (response.ok) {
                    // Banner deleted successfully, you can handle this as needed (e.g., remove the row from the table)
                    // Reload the page or update the UI to reflect the changes
                    location.reload();
                } else {
                    // Handle the case where the delete request fails (e.g., show an error message)
                    console.error('Failed to delete banner');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>

@endsection