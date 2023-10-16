@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl hero-text">Embroidery</h1>
          <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 hero-para">
              Embroidery is the art of decorating fabric with intricate and durable designs using specialized threads. It adds an element of sophistication and personalization to a variety of items, from apparel to promotional merchandise, creating visually appealing embellishments.
            </p>

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Products'" :products='json_encode([
    ["title" => "Bags", "image" => "images/services/embroidery/bag.png", "url" => "embroidery/bag"],
    ["title" => "Beanies", "image" => "images/services/embroidery/beanie.png", "url" => "embroidery/beanies"],
    ["title" => "Caps", "image" => "images/services/embroidery/cap2.jpg", "url" => "embroidery/caps"],
    ["title" => "Hoodies", "image" => "images/services/embroidery/hoodie2.png", "url" => "embroidery/hoodies"],
    ["title" => "Polo Tshirts", "image" => "images/services/embroidery/polo.png", "url" => "embroidery/polo"],

])' :columns="4"/>



@endsection


