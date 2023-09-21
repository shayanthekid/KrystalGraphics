<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krystal Graphics</title>

    <link rel="stylesheet" href="../../css/app.css">

    <!-- Include Alpine.js version 3.x.x -->
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

        <header class=" top-0 left-0 w-full">
            <div class="lg:hidden">
                <x-navigation />
            </div>
        </header>

        <main class="bg-slate-300 "> <!-- Add padding to the top -->
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
