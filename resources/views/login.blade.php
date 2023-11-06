<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krystal Graphics Admin</title>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
 
</head>


<body>



<div class="flex justify-center items-center h-screen bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 space-y-6">
        <form method="POST" action="{{ route('login.custom') }}" class="space-y-4">
            @csrf
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300" />
                <span class="error-message text-red-500 text-sm" id="error-email"></span>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300" />
                <span class="error-message text-red-500 text-sm" id="error-password"></span>
            </div>
            <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                Login
            </button>
        </form>
    </div>
</div>



<script type="text/javascript">
    // Check if Laravel put any errors in the session
    @if($errors->any())
        // Convert the Laravel errors into a JSON object
        const errors = @json($errors->all());
        // Log the errors to the console
        console.log(errors);

        // Display the errors on the form
        errors.forEach((error) => {
            if(error.includes('email')) {
                document.getElementById('error-email').textContent = error;
            }
            if(error.includes('password')) {
                document.getElementById('error-password').textContent = error;
            }
        });
    @endif
</script>


</body>
</html>