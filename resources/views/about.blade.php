@extends('layouts.app')

@section('content')
<!-- About us -->
<div class="py-16 ">
    <div class="container mx-auto px-4 grid grid-cols-1 gap-4 md:grid-cols-2 hero-text" style="opacity: 0">
        <!-- First Column -->
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-left lg:text-4xl lg:w-9/12 hero-para">  
                   Welcome to Kristal Graphics! We are a team of dedicated professionals who are passionate about providing 
                   high-quality printing services to our clients. Our company has been in the industry for over <span class="text-red-600">35</span>  years, 
                   and we have built a reputation for delivering exceptional results
            
            
            
            
            
            
            </h2>
           
    
           
           
            <p class="text-gray-700 leading-relaxed text-left mb-4 lg:text-xl lg:w-9/12">
               At Kristal Graphics, we offer a wide range of printing services, including digital printing, offset printing, large format printing, and more. We use the latest technology and equipment to ensure that our clients receive the best possible results. Our team is made up of skilled designers, printers, and customer service representatives who are committed to providing excellent service to our clients.
            </p>
            <!-- Add your image/icon here -->
        </div>
        
        <!-- Second Column -->
        <div>
            <h3 class="text-lg font-semibold text-gray-600 mb-4 text-left"><span style="color: #ED1F24;">Advance</span> Printing Solutions</h3>
            <p class="text-gray-700 leading-relaxed text-left mb-4">

We understand that every client has unique needs and requirements, and we work closely with each one to ensure that their printing needs are met. Whether you need business cards, brochures, flyers, banners, or any other printed material we are the place for you.
            </p>
            <h3 class="text-lg font-semibold text-gray-600 mb-4 text-left">Crafting with <span style="color: #ED1F24;">Care</span></h3>
            <p class="text-gray-700 leading-relaxed text-left mb-4">
            Our mission is to provide our clients with high-quality printing services at affordable prices. We believe that everyone should have access to professional printing services, regardless of their budget. 
          
            </p>
            <h3 class="text-lg font-semibold text-gray-600 mb-4 text-left">Your Vision, <span style="color: #ED1F24;">Our Mission</span></h3>
            <p class="text-gray-700 leading-relaxed text-left">
            Thank you for choosing Kristal Graphics. We look forward to working with you and helping you achieve your printing goals.
            
            </p>
        </div>
    </div>
</div>

{{-- Our Team --}}

<div id="team" class="section relative pt-20 pb-8 md:pt-16 bg-white">
    <div class="container xl:max-w-6xl mx-auto px-4">
        <!-- section header -->
        <header class="text-center mx-auto mb-12">
            <h2 class="text-2xl leading-normal mb-2 font-bold text-black ">
                <span class="font-light">Our</span> Team
            </h2>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
                <circle cx="50.1" cy="30.4" r="5" class="stroke-primary" style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
            </svg>
        </header>
        <!-- end section header -->
        <!-- row -->
        <div class="flex flex-wrap flex-row -mx-4 justify-center">
            <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                <div class="relative overflow-hidden bg-white  hover-grayscale-0 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- team block -->
                    <div class="relative overflow-hidden px-6">
                        <img src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar3.png" class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale" alt="title image">
                    </div>
                    <div class="pt-6 text-center">
                        <p class="text-lg leading-normal font-bold mb-1">Page Anderson</p>
                        <p class="text-gray-500 leading-relaxed font-light">Project Manager/ Coordinator</p>
                        <!-- social icon -->
                      
                    </div>
                </div>
                <!-- end team block -->
            </div>
            <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                <!-- team block -->
                <div class="relative overflow-hidden bg-white  mb-12 hover-grayscale-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="relative overflow-hidden px-6">
                        <img src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar3.png" class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale" alt="title image">
                    </div>
                    <div class="pt-6 text-center">
                        <p class="text-lg leading-normal font-bold mb-1">Courtney Meherin</p>
                        <p class="text-gray-500 leading-relaxed font-light">Office Manager</p>
                        <!-- social icon -->
                    
                    </div>
                </div>
                <!-- end team block -->
            </div>
            <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                <!-- team block -->
                <div class="relative overflow-hidden bg-white  mb-12 hover-grayscale-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="relative overflow-hidden px-6">
                        <img src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar2.png" class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale" alt="title image">
                    </div>
                    <div class="pt-6 text-center">
                        <p class="text-lg leading-normal font-bold mb-1">Darwin DeVitis</p>
                        <p class="text-gray-500 leading-relaxed font-light">Graphic Design / Prepress and Print Specialist</p>
                        <!-- social icon -->
                  
                    </div>
                </div>
                <!-- end team block -->
            </div>
            <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                <!-- team block -->
                    <div class="relative overflow-hidden px-6">
                        <img src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar4.png" class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale" alt="title image">
                    </div>
                    <div class="pt-6 text-center">
                        <p class="text-lg leading-normal font-bold mb-1">Bryan Ortega</p>
                        <p class="text-gray-500 leading-relaxed font-light">Graphic Designer</p>
                        <!-- social icon -->
                
                    </div>
                </div>
                <!-- end team block -->
            </div>
        </div>
        <!-- end row -->
    </div>
</div>




<script>


    const tl = gsap.timeline();
   tl.to(".hero-text", 1, {
    opacity: 1,
  y: 10,
  ease: "power4.inOut",
  stagger: {
    amount: 0.3
  }
})

const tl2 = gsap.timeline();
tl2.to(".hero-para", 1, {
    opacity: 1,
  y: 10,
  ease: "power4.inOut",
  stagger: {
    amount: 0.3
  }
})

</script>
@endsection