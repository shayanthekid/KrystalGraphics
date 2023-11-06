<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kristal Graphics</title>

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
{{-- <style>
    #loading-animation {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9); /* White background with slight transparency */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}
</style> --}}
<body>
    {{-- <div id="loading-animation">
    <img src="{{ asset('images/homepage/loading.gif') }}" alt="Loading...">
</div> --}}
<!-- dfdf-->
       <header class="top-0 left-0 w-full">
    <div class="lg:hidden">
        <!-- This navigation will be displayed on smaller screens (mobile view) -->
        <x-navigation />
    </div>
    <div class="hidden lg:block">
        <!-- This "desknav" will be displayed on larger screens (not mobile view) -->
        <x-desknav />
    </div>
</header>

        <main class=""> <!-- Add padding to the top -->
            @yield('content')
        

            
        </main>
    
    <x-footer />

  <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navigation', () => ({
            isOpen: false,
        }));
    });
</script>
{{-- <script>
    window.addEventListener("load", function() {
    const loadingAnimation = document.getElementById("loading-animation");
    if (loadingAnimation) {
        loadingAnimation.style.display = "none";
    }
});
</script> --}}
</body>
</html>
