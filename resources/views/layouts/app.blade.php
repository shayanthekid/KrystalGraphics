<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krystal Graphics</title>

    <link rel="stylesheet" href="../../css/app.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <!-- Include Alpine.js version 3.x.x -->
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<!-- dfdf-->
        <header class=" top-0 left-0 w-full">
            <div class="lg:hidden">
                <x-navigation />
            </div>
            <x-desknav />
        </header>

        <main class=""> <!-- Add padding to the top -->
            @yield('content')
        

            
        </main>
    
    <footer>
        <!-- Your footer content goes here -->
    </footer>

  <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navigation', () => ({
            isOpen: false,
        }));
    });
</script>
</body>
</html>
