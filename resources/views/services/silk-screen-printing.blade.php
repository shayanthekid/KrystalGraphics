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
   

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Our colorful imprints '" :products='json_encode([
    ["title" => "T-shirts", "image" => "images/services/shirt.png", "url" => "silk-screen-printing/tshirt"],
    ["title" => "Hoodies", "image" => "images/services/hoodie2.png", "url" => "silk-screen-printing/hoodies"],
    ["title" => "Safety Vest", "image" => "images/services/vest.jpg", "url" => "silk-screen-printing/vest"],
    ["title" => "Bandana Bags ", "image" => "images/services/bandana2.png", "url" => "silk-screen-printing/bandana"],
    ["title" => "Pants", "image" => "images/services/hoodie.png", "url" => "#"],
    ["title" => "Jackets", "image" => "images/services/hoodie.png", "url" => "#"],
])'/>




@endsection


