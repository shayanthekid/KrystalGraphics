<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kristal Graphics: Admin</title>

    <link rel="stylesheet" href="../../css/app.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
   
<!-- Include Alpine.js version 3.x.x -->
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/Observer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../../js/turn.min.js"></script>


</head>

<body>
    
<!-- dfdf-->
       <header class="top-0 left-0 w-full">

<nav class="bg-white py-4 px-8 flex flex-wrap justify-between items-center">
    <!-- Logo -->
    <div class="w-1/3">
        <img src="{{ asset('images/logos/logo2.png') }}" alt="Logo" class="w-24">
    </div>

    <!-- Main Navigation Links -->
  <ul class="flex w-1/3 justify-center space-x-6 font-montserrat font-medium">
    <li><a href="{{ route('admin') }}" class="{{ Route::currentRouteName() === 'admin' ? 'active-link' : 'nonactive' }} ">Create </a></li>
    <li><a href="{{ route('adminproducts') }}" class="{{ Route::currentRouteName() === 'adminproducts' ? 'active-link' : 'nonactive' }}">View </a></li>
 </ul>

         
   <div class="w-1/3 flex justify-end space-x-4 font-montserrat font-medium">
    <!-- CSRF token for AJAX request -->
    <input type="hidden" id="csrf_token" value="{{ csrf_token() }}">

    <button onclick="logout()" type="button" class="py-2 px-4 text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-300 focus:ring-opacity-50">
        Logout
    </button>
</div>


   

   
   
</nav>



</header>

        <main class=""> <!-- Add padding to the top -->
            @yield('content')
        

            
        </main>
    


  <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navigation', () => ({
            isOpen: false,
        }));
    });
</script>

<script>
    function logout() {
        const csrfToken = document.getElementById('csrf_token').value;
        
        fetch("{{ route('logout') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            credentials: 'same-origin'  // Required for cookies, including session CSRF token
        })
        .then(response => {
            // Redirect to login page or handle as needed
            if (response.ok) {
                window.location.href = "{{ route('login') }}";
            } else {
                // Handle error
                console.error('Logout failed');
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>


</body>
</html>
