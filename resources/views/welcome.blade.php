@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
   
<div class="bg-[#94A2CE] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl ">Print Perfection</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4">Discover meticulously embroidery, packaging, and more at Kristal Graphics. Where quality printing builds your brand and nurtures lasting bonds.</p>
            <a href="#" class="mt-8 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">Contact Us</a>
        </div>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="container mx-auto">
       <h2 class="text-2xl font-semibold mb-8 ml-2">Top Picks, <span class="text-red-500">Irresistible</span> Prices</h2>

<!-- Carousel of Cards -->
<div class="flex space-x-4 overflow-x-auto">
    <!-- Card 1 -->
    <div class="w-60">
        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
            <img src="{{ asset('images/homepage/cap.png') }}" alt="Product 1" class="w-36 h-36 object-contain object-center" />
        </div>
        <h3 class="text-xl font-semibold mt-4">Embroidery</h3>
    </div>

    <!-- Card 2 -->
    <div class="w-60">
        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
            <img src="{{ asset('images/homepage/weed.png') }}" alt="Product 2" class="w-36 h-36 object-contain object-center" />
        </div>
        <h3 class="text-xl font-semibold mt-4">Mylar Bags</h3>
    </div>

    <!-- Card 3 -->
    <div class="w-60">
        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
            <img src="{{ asset('images/homepage/pomade.png') }}" alt="Product 3" class="w-36 h-36 object-contain object-center" />
        </div>
        <h3 class="text-xl font-semibold mt-4">Packaging</h3>
    </div>

    <!-- Card 4 -->
    <div class="w-60">
        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
            <img src="your-image4.jpg" alt="Product 4" class="w-36 h-36 object-contain object-center" />
        </div>
        <h3 class="text-xl font-semibold mt-4">Product 4</h3>
    </div>

    <!-- Card 5 -->
    <div class="w-60">
        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
            <img src="your-image5.jpg" alt="Product 5" class="w-36 h-36 object-contain object-center" />
        </div>
        <h3 class="text-xl font-semibold mt-4">Product 5</h3>
    </div>
</div>


    </div>
</div>



@endsection
