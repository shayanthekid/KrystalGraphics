@extends('layouts.admin')

@section('content')


    <!-- Create Banner Section -->
    <div class="container mx-auto bg-white rounded-lg p-6 shadow-md mb-8" style="padding: 1.5rem;">
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
            <?php
            $imagePath = str_replace('storage/', 'public/storage/', $banner->image_path);
            ?>
            <img src="{{ asset($imagePath) }}" alt="{{ $banner->title }}" class="w-16 h-16 object-cover">
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

    <form id="uploadProductForm" method="POST" action="{{ route('admin.products.uploadproduct') }}" enctype="multipart/form-data">
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
        <!-- Cover Image Field -->
<div class="mb-4">
    <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-2">Choose a Cover Image:</label>
    <input type="file" id="cover_image" name="cover_image" accept="image/*" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
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


<div class="container mx-auto bg-white rounded-lg p-6 shadow-md mb-8">
    <h1 class="text-3xl font-semibold mb-6 border-b pb-2">Upload Brochure</h1>

    <form method="POST"  id="uploadBrochureForm" action="{{route('uploadbroschure')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

       <!-- Dropdown for Subcategories -->
    <select id="subcategorySelect" name="subcategory_id" class="mb-4 p-2 border rounded">
        <!-- Options will be populated by AJAX -->
    </select>

    <!-- File Upload Input -->
    <input type="file" name="brochure" accept="application/pdf" class="mb-4 p-2 border rounded">

    <!-- Submit Button -->
 
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Upload Brochure
    </button>


  <div id="brochureProgressBarContainer" class="mt-4 bg-gray-100 h-2 rounded-md">
    <div id="brochureProgressBar" class="w-0 h-2 bg-blue-500 rounded-md"></div>
</div>
<div id="brochureStatusMessage" class="text-sm mt-2"></div>

    </form>

 <table id="brochureTable" class="w-full text-left border-collapse">
      {{ csrf_field() }}
        <thead>
            <tr>
                <th class="p-3 border-b">Subcategory</th>
                <th class="p-3 border-b">Brochure</th>
                <th class="p-3 border-b">Action</th>
                {{-- <th class="p-3 border-b">Action</th> --}}
                
            </tr>
        </thead>
        <tbody>
            <!-- Rows will be populated by AJAX -->
        </tbody>
    </table>

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

    $('#uploadProductForm').submit(function (event) {
        event.preventDefault();

        const form = this;
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
                form.reset();
                progressBar.style.width = '0%'; // Reset progress bar

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

<script>
   document.addEventListener('DOMContentLoaded', function () {
    fetch('/subcategories')
        .then(response => response.json())
        .then(data => {
            const select = document.getElementById('subcategorySelect');
            const tableBody = document.getElementById('brochureTable').querySelector('tbody');

            data.forEach(subcategory => {
                // Populate the dropdown
                const option = document.createElement('option');
                option.value = subcategory.id;
                option.textContent = subcategory.name;
                select.appendChild(option);

                // Check if imgsrc is not empty
                if (subcategory.imgsrc) {
                      const brochureUrl = subcategory.imgsrc.replace('storage', 'public/storage');
//  row.insertCell(1).innerHTML = `<a href="${brochureUrl}" target="_blank">View Brochure</a>`;
                    // Populate the table
                    const row = tableBody.insertRow();
                    row.insertCell(0).textContent = subcategory.name;
                    row.insertCell(1).innerHTML = `<a href="${brochureUrl}" target="_blank">View Brochure</a>`;
                      // Add delete button
                    const deleteCell = row.insertCell(2);
                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = 'Delete';
deleteButton.classList.add("bg-red-500", "hover:bg-blue-700", "text-white", "font-bold", "py-2", "px-4", "rounded");
                    deleteButton.onclick = function() { deleteBrochure(subcategory.id); }; // Adjust the delete function as needed
                    deleteCell.appendChild(deleteButton);

                }
            });
        })
        .catch(error => console.error('Error:', error));
});


function deleteBrochure(subcategoryId) {
    // Implement the deletion logic here
    console.log("Delete brochure with ID:", subcategoryId);
    // You might want to make an AJAX call to your server to handle the deletion
//  if (!confirm("Are you sure you want to delete this subcategory?")) {
//         return;
//     }


        // Make an AJAX DELETE request to the delete route with the banner ID
            fetch(`/subcategory/${subcategoryId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include the CSRF token
                },
            })
            .then(response => {
                if (response.ok) {
                    // Banner deleted successfully, you can handle this as needed (e.g., remove the row from the table)
                    // Reload the page or update the UI to reflect the changes
                    alert("Brochure deleted");
                    location.reload();
                } else {
                    // Handle the case where the delete request fails (e.g., show an error message)
                    console.error('Failed to delete brochure');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


}

</script>


<script>
    $('#uploadBrochureForm').submit(function (event) {
      event.preventDefault();
    const formData = new FormData(this);

    $('#brochureStatusMessage').text('').removeClass('text-red-600 text-green-600'); // Reset message

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
                    $('#brochureProgressBar').css('width', uploadPercentage + '%');
                }
            }, false);
            return xhr;
        },
       success: function (response) {
            // Display a success message
            $('#brochureStatusMessage').text("Brochure uploaded successfully, please reload page").addClass('text-green-600');
            // Reset the form and progress bar
            $('#uploadBrochureForm')[0].reset();
            $('#brochureProgressBar').css('width', '0%');
        },
        error: function (xhr, status, error) {
            // Display an error message
            $('#brochureStatusMessage').text("Error: " + error).addClass('text-red-600');
            // Reset the progress bar
            $('#brochureProgressBar').css('width', '0%');
        },
    });
});
</script>
@endsection