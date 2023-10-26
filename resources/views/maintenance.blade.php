
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
<body>

<div class="bg-white py-16 md:py-0 md:px-16 lg:py-0 overflow-hidden hero-bg mt-32">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full">
            <div class="text-center lg:text-left text-black lg:-mt-32">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-5xl lg:py-10 hero-text" >
This Website is currently under maintenance.
</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-lg p-4 lg:p-0 hero-para ">
Get in touch with us:<br> Phone: <span class="font-bold"> 818-342-7822 </span> Fax: <span class="font-bold">818-884-7046</span>

                </p>
                <a href="{{ route('contact') }}" class="mt-14 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left font-roboto hero-button" style="opacity: 0">Contact Us</a>
            </div>
        </div>

        <div class="hidden lg:flex lg:w-full lg:items-end lg:justify-end col-span-2 ml-20 ">
            <img src="{{ asset('images/homepage/construction.png') }}" alt="" class="w-full hero-image" style="max-width: 100%; height: auto; ">
        </div>
    </div>
</div>


 <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navigation', () => ({
            isOpen: false,
        }));
    });
</script>
</body>
</html>
