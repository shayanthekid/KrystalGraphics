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
                <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl lg:py-10">
Empowering imagination, one print at a time
</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 lg:p-0">
                    Unlocking Creativity, One Print at a Time!
Your source for Printing, Packaging, Promotional Items, and More 

                </p>
                <a href="#" class="mt-8 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left">Contact Us</a>
            </div>

          
        </div>

             <div class="hidden lg:flex lg:w-full lg:items-end justify-end">
            <img src="{{ asset('images/homepage/heroimage.png') }}" alt="" class="w-full" style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>

{{-- Banner --}}


<div x-data="carousel" class="relative w-full max-w-screen-lg mx-auto p-3">
    <div class="relative overflow-hidden rounded-lg">
        <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
            <!-- Images will be dynamically added here -->
            <template x-for="(image, index) in images" :key="index">
                <div class="w-full h-96 flex-shrink-0">
                    <img :src="image" :alt="'Image ' + (index + 1)" class="w-full h-full object-contain md:object-fit">
                </div>
            </template>
        </div>
    </div>
    
    <!-- Navigation Buttons -->
    <div class="absolute inset-y-0 left-0 flex items-center">
        <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700">
            <
        </button>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center">
        <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700">
            >
        </button>
    </div>
</div>



<!-- Products -->
<x-product-carousel :title="'Top Picks'" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png", "url" => "/embroidery"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png", "url" => "/embroidery"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png", "url" => "/embroidery"],
    ["title" => "Product 4", "image" => "images/homepage/cap.png", "url" => "/embroidery"],
    ["title" => "Product 5", "image" => "images/homepage/weed.png", "url" => "/embroidery"],
     ["title" => "Product 6", "image" => "images/homepage/weed.png", "url" => "/embroidery"]
])'/>

<x-product-carousel :title="'Create Brands with us'" :products='json_encode([
    ["title" => "Embroidery", "image" => "images/homepage/cap.png", "url" => "/embroidery"],
    ["title" => "Mylar Bags", "image" => "images/homepage/weed.png", "url" => "/embroidery"],
    ["title" => "Packaging", "image" => "images/homepage/pomade.png", "url" => "/embroidery"],
    ["title" => "Product 4", "image" => "images/homepage/cap.png", "url" => "/embroidery"],
    ["title" => "Product 5", "image" => "images/homepage/weed.png", "url" => "/embroidery"]
])'/>

<!-- more services -->

<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">More Services</h2>

        <!-- Cards Section -->
        <div class="flex flex-wrap justify-center items-center lg:justify-center">
           
            <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class=" bg-[#FFC20E] rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset('images/homepage/loud.png') }}" alt="" class="w-full h-72 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Promotions</h3>
            </div>

            <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset('images/homepage/glass.png') }}" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Glass Jars</h3>
            </div>

             <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset('images/homepage/silkt.png') }} " alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Silk Screen Printing</h3>
            </div>

             <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Additional Website</h3>
            </div>
      
        </div>
    </div>
</div>



<script>
    function carousel() {
        return {
             images: [],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
                this.fetchImages();
            },

            fetchImages() {
                fetch('{{ route("admin.banners.json") }}')
                    .then(response => response.json())
                    .then(data => {
                        this.images = data.banners.map(banner => banner.image_path);
                    })
                    .catch(error => {
                        console.error('Failed to fetch images:', error);
                    });
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>


@endsection
