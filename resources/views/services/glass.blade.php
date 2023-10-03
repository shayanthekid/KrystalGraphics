@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl">Glass jars</h1>
           
   

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Our colorful imprints '" :products='json_encode([
    ["title" => "Tubes", "image" => "images/services/glass/jars.png", "url" => "glass/tubes"],
    ["title" => "Jetter Jars", "image" => "images/services/glass/glass.png", "url" => "glass/jars"],
  

])'/>




@endsection


