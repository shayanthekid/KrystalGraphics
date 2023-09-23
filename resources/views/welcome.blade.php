@extends('layouts.app')

@section('content')
@php
use App\View\Components\ProductCarousel;
@endphp
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


@endsection
