@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl">Packaging</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4">
We offer packaging services for your printed materials, including custom packaging solutions. 
            </p>
   

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Our colorful imprints '" :products='json_encode([
    ["title" => "Boxes", "image" => "images/services/packaging/pomade.png", "url" => "packaging/box"],
    ["title" => "Bags", "image" => "images/services/packaging/bag.png", "url" => "packaging/bag"],

])'/>




@endsection


