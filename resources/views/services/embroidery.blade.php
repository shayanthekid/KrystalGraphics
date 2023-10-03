@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl">Embroidery</h1>
         

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Our colorful imprints '" :products='json_encode([
    ["title" => "Bags", "image" => "images/services/embroidery/bag.png", "url" => "embroidery/bag"],
    ["title" => "Beanies", "image" => "images/services/embroidery/beanie.png", "url" => "embroidery/beanies"],
    ["title" => "Caps", "image" => "images/services/embroidery/cap.png", "url" => "embroidery/caps"],
    ["title" => "Hoodies", "image" => "images/services/embroidery/hoodie2.png", "url" => "embroidery/hoodies"],
    ["title" => "Polo Tshirts", "image" => "images/services/embroidery/polo.png", "url" => "embroidery/polo"],

])'/>




@endsection


