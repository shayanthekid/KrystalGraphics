@extends('layouts.app')

@section('content')
@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Hero Section -->
   
<div class="bg-[#DCDCDC] py-16 lg:py-0 overflow-hidden">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full">
            <div class="text-center lg:text-left text-black">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl lg:py-10">
                    Print Perfection
                </h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 lg:p-0">
                    Unlocking Creativity, One Print at a Time!
                    Your source for Printing, Packaging, Promotional Items, and More
                </p>
                <a href="{{ route('contact') }}" class="mt-8 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left">Contact Us</a>
            </div>
        </div>

        <div class="hidden lg:flex lg:w-full lg:items-end lg:justify-end col-span-2 ml-5 ">
            <img src="{{ asset('images/homepage/Heroimg.png') }}" alt="" class="w-full" style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>


{{-- Banner --}}
     <div class="text-center lg:text-left text-black bg-[#FFC414]">
                <h1 class="text-4xl p-5  font-semibold font-montserrat lg:text-3xl lg:py-10 text-center">
Check Out Our <span style="color: #ffff;">Monthly Promotions </span>
</h1>
              
            </div>

<div x-data="carousel" class="relative w-full max-w-screen-lg mx-auto p-3 -mt-20 md:mt-5 ">
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


{{-- Top pics --}}
<x-product-carousel :title="'Top Picks'" :products='json_encode([
    ["title" => "Labels", "image" => "images/homepage/logos/newlabel.jpg", "url" => ""],
    ["title" => "Jars", "image" => "images/homepage/logos/weed2.png", "url" => ""],
    ["title" => "Postcards", "image" => "images/homepage/logos/postcard.png", "url" => ""],
    ["title" => "SilkScreen", "image" => "images/homepage/logos/silk.png", "url" => ""],
    ["title" => "Business Cards", "image" => "images/homepage/logos/cards.png", "url" => ""],
 

   
])'/>
   
<!-- Products, wil become a image -->

{{-- <x-product-carousel :title="'Create Brands with us'" :products='json_encode([
    ["title" => "Ember Valley", "image" => "images/homepage/ember.png", "url" => ""],
    ["title" => "DC Collectives", "image" => "images/homepage/dccollective.png", "url" => ""],
    ["title" => "Wafers", "image" => "images/homepage/wafers.png", "url" => ""],
    ["title" => "Coast to Coast", "image" => "images/homepage/coast.png", "url" => ""],
    ["title" => "Herbarium", "image" => "images/homepage/Herbarium.png", "url" => ""],
    ["title" => "Maven", "image" => "images/homepage/Maven.png", "url" => ""],
    ["title" => "APC", "image" => "images/homepage/logos/44.png", "url" => ""],
    ["title" => "770", "image" => "images/homepage/logos/77.png", "url" => ""],
    ["title" => "ATSEI", "image" => "images/homepage/logos/78.png", "url" => ""],
    ["title" => "AFSCME", "image" => "images/homepage/logos/afscme.png", "url" => ""],
    ["title" => "Aava", "image" => "images/homepage/logos/ava.png", "url" => ""],
    ["title" => "UFCW", "image" => "images/homepage/logos/cannabis.png", "url" => ""],
    ["title" => "Cintas", "image" => "images/homepage/logos/Cintas.png", "url" => ""],
    ["title" => "Ethix", "image" => "images/homepage/logos/ethix.png", "url" => ""],
    ["title" => "DGA", "image" => "images/homepage/logos/guild.png", "url" => ""],
    ["title" => "HANZDEFuko", "image" => "images/homepage/logos/HanzDeFuko.jpg", "url" => ""],
    ["title" => "HJM", "image" => "images/homepage/logos/holy.png", "url" => ""],
    ["title" => "Omni", "image" => "images/homepage/logos/omni.png", "url" => ""],
    ["title" => "Voyant", "image" => "images/homepage/logos/voyant.png", "url" => ""],

   
])'/> --}}


<!-- more services -->
<x-product-carousel :title="'More Services'" :products='json_encode([
     ["title" => "Cad Cut", "image" => "images/homepage/loud.png", "url" => ""],
    ["title" => "Label Application", "image" => "images/homepage/labelapp.jpg", "url" => ""],
    ["title" => "Fulfillment", "image" => "images/homepage/Fullfillment.jpg", "url" => ""],
    ["title" => "Delivery Service", "image" => "images/homepage/delivery.jpg", "url" => ""]
 

   
])'/>


<script>
    function carousel() {
        return {
             images: [
            '{{ asset('images/bannertemp/banner.png') }}',
           '{{ asset('images/bannertemp/banner2.png') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
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
{{-- <script>
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
</script> --}}
<script>
    let defaultTransform2 = 0;

    function goNext2() {
        defaultTransform2 = defaultTransform2 - 398;
        var slider2 = document.getElementById("slider2");
        if (Math.abs(defaultTransform2) >= slider2.scrollWidth / 1.7) defaultTransform2 = 0;
        slider2.style.transform = "translateX(" + defaultTransform2 + "px)";
    }

    const next2 = document.getElementById("next2"); // Make sure to add a unique ID to the button in the second carousel.
    next2.addEventListener("click", goNext2);

    function goPrev2() {
        var slider2 = document.getElementById("slider2");
        if (Math.abs(defaultTransform2) === 0) defaultTransform2 = 0;
        else defaultTransform2 = defaultTransform2 + 398;
        slider2.style.transform = "translateX(" + defaultTransform2 + "px)";
    }

    const prev2 = document.getElementById("prev2"); // Make sure to add a unique ID to the button in the second carousel.
    prev2.addEventListener("click", goPrev2);
</script>

@endsection
