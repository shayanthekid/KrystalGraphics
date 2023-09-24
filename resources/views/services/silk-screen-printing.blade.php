@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl">Silk Screen Printing</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4">
                Screen printing is a versatile printing technique that can be used for a variety of applications, from t-shirts and apparel to promotional items and signage.
            </p>
          <div class="grid grid-cols-2 gap-4">
    <a href="#" class="inline-block px-3 py-2 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 mx-2">Tshirts</a>
    <a href="#" class="inline-block px-3 py-2 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 mx-2">Hoodies</a>
    <a href="#" class="inline-block px-3 py-2 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 mx-2">Bandanas</a>
    <a href="#" class="inline-block px-3 py-2 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 mx-2">Safety Vest</a>
</div>

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Our colorful imprints '" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png"],
    ["title" => "Product 4", "image" => "your-image4.jpg"],
    ["title" => "Product 5", "image" => "your-image5.jpg"]
])'/>

<!-- Products -->
<x-product-carousel :title="'Hoodie Fit check '" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png"],
    ["title" => "Product 4", "image" => "your-image4.jpg"],
    ["title" => "Product 5", "image" => "your-image5.jpg"]
])'/>

<!-- Products -->
<x-product-carousel :title="'Designs for tees'" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png"],
    ["title" => "Product 4", "image" => "your-image4.jpg"],
    ["title" => "Product 5", "image" => "your-image5.jpg"]
])'/>



@endsection

