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

        {{-- Create Banner --}}
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4">Create Banner</h1>

    <!-- Banner Creation Form -->
 <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST') <!-- Specify the HTTP method -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" id="title" name="title" class="mt-1 p-2 block w-full rounded-md border-gray-300">

        @error('title')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
        <input type="file" id="image" name="image" class="mt-1 block w-full">

        @error('image')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Create Banner</button>
</form>



            {{-- View Banner --}}
   <div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4">Banners</h1>

    <!-- Table to Display Banners -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Image
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through banners and display each row -->
            @foreach ($banners as $banner)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $banner->title }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  
                    <img src="{{ asset( $banner->image_path) }}" alt="{{ $banner->title }}" class="w-16 h-16 object-cover">
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <!-- Add buttons for actions like Edit and Delete -->
                 
<button class="text-red-600 hover:underline ml-2 delete-banner" data-id="{{ $banner->id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

            
        </main>
    
    <footer>
  
    </footer>

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
</body>
</html>