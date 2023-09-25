@extends('layouts.app')

@section('content')
@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Hero Section -->
   
<div class="bg-[#94A2CE] py-16">
    <div class="container mx-auto px-4 grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full">
            <div class="text-center lg:text-left text-white">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl lg:py-10">Print Perfection</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 lg:p-0">Discover meticulously embroidery, packaging, and more at Kristal Graphics. Where quality printing builds your brand and nurtures lasting bonds.</p>
                <a href="#" class="mt-8 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left">Contact Us</a>
            </div>

          
        </div>

             <div class="hidden lg:flex lg:w-full lg:items-end justify-end">
            <img src="{{ asset('images/homepage/heroimage.png') }}" alt="" class="w-full" style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>


<!-- Banner -->
<div class="bg-yellow-400 h-16">
    
</div>


<!-- Products -->
<x-product-carousel :title="'Top Picks, Irresistible Prices'" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png"],
    ["title" => "Product 4", "image" => "your-image4.jpg"],
    ["title" => "Product 5", "image" => "your-image5.jpg"]
])'/>

<x-product-carousel :title="'Create Brands with us'" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png"],
    ["title" => "Product 4", "image" => "your-image4.jpg"],
    ["title" => "Product 5", "image" => "your-image5.jpg"]
])'/>

<!-- more services -->

<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">More Services</h2>

        <!-- Cards Section -->
        <div class="flex flex-wrap justify-center items-center lg:justify-center">
           
            <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Something</h3>
            </div>

            <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Something</h3>
            </div>

             <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Something</h3>
            </div>

             <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Something</h3>
            </div>
      
        </div>
    </div>
</div>

<!-- About us -->
<div class="py-16 bg-[#E4E4E4]">
    <div class="container mx-auto px-4 grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- First Column -->
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-left lg:text-4xl lg:w-9/12">Krystal Graphics: Your Printing Partner for Over <span class="text-red-600">35</span> Years!</h2>
            <p class="text-gray-700 leading-relaxed text-left mb-4 lg:text-xl lg:w-9/12">
                For more than three decades, Kristal Graphics has been dedicated to delivering top-tier printing services to our valued clients. With an unwavering commitment to excellence, we've established ourselves as a trusted name in the industry.
            </p>
            <!-- Add your image/icon here -->
        </div>
        
        <!-- Second Column -->
        <div>
            <h3 class="text-lg font-semibold text-gray-600 mb-4 text-left"><span style="color: #ED1F24;">Advance</span> Printing Solutions</h3>
            <p class="text-gray-700 leading-relaxed text-left mb-4">
                Our extensive array of printing solutions, from digital and offset to large format, ensures we're equipped with cutting-edge technology to bring your visions to life. Our team comprises adept designers, printers, and customer service champions, all driven by the goal of providing exceptional service.
            </p>
            <h3 class="text-lg font-semibold text-gray-600 mb-4 text-left">Crafting with <span style="color: #ED1F24;">Care</span></h3>
            <p class="text-gray-700 leading-relaxed text-left mb-4">
                Understanding the uniqueness of each client's needs, we collaborate closely to tailor our offerings to your exact specifications. Whether it's business cards, brochures, flyers, banners, or any print material, we're your one-stop destination.
            </p>
            <h3 class="text-lg font-semibold text-gray-600 mb-4 text-left">Your Vision, <span style="color: #ED1F24;">Our Mission</span></h3>
            <p class="text-gray-700 leading-relaxed text-left">
                Our mission is clear: to make high-quality printing accessible to all, regardless of budget. We believe in professional printing services that truly empower your ideas. Your trust in Kristal Graphics is the cornerstone of our success, and we're excited to embark on a printing journey that brings your visions to vibrant life.
            </p>
        </div>
    </div>
</div>




@endsection
