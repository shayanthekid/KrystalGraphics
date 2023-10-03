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
Print Perfection
</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 lg:p-0">
                    Unlocking Creativity, One Print at a Time!
Your source for Printing, Packaging, Promotional Items, and More 

                </p>
                <a href="{{ route('contact') }}" class="mt-8 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left">Contact Us</a>
            </div>

          
        </div>

             <div class="hidden lg:flex lg:w-full lg:items-end justify-end">
            <img src="{{ asset('images/homepage/heroimage.png') }}" alt="" class="w-full" style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>

{{-- Banner --}}
     <div class="text-center lg:text-left text-black">
                <h1 class="text-4xl p-5  font-semibold font-montserrat lg:text-3xl lg:py-10 text-center">
Check Out Our <span style="color: #ED1F24;">Monthly Promotions </span>
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
 <div class="lg:hidden">
        <!-- This will be displayed on smaller screens (mobile view) -->
    
<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">Fastest Selling Items</h2>

        <!-- Carousel of Cards -->
        <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll scrollbar-red">
           
            <!-- Card 1 -->
            <div class="w-60">
                <a href="/embroidery">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="images/homepage/label.png" alt="Labels" class="w-66 h-66 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">Labels</h3>
                </a>
            </div>
            
            <!-- Card 2 -->
            <div class="w-60">
                <a href="/embroidery">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="images/homepage/jars.png" alt="Jars" class="w-66 h-66 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">Jars</h3>
                </a>
            </div>
            
            <!-- Card 3 -->
            <div class="w-60">
                <a href="/embroidery">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="images/homepage/postcard2.png" alt="Postcards" class="w-66 h-66 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">Postcards</h3>
                </a>
            </div>
            
            <!-- Card 4 -->
            <div class="w-60">
                <a href="/embroidery">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="images/homepage/silkbag.png" alt="Silkscreen" class="w-56 h-56 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">Silkscreen</h3>
                </a>
            </div>
            
            <!-- Card 5 -->
            <div class="w-60">
                <a href="/embroidery">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="images/homepage/business.png" alt="Business Cards" class="w-66 h-66 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">Business Cards</h3>
                </a>
            </div>
            
            <!-- Card 6 -->
            <div class="w-60">
                <a href="/embroidery">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="images/homepage/flyer.png" alt="Flyers" class="w-66 h-66 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">Flyers</h3>
                </a>
            </div>
            
        </div>
    </div>
</div>


    </div>
    <div class="hidden lg:block">
        <!-- This will be displayed on larger screens (not mobile view) -->



<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">Fastest Selling Items</h2>

        <!-- Carousel of Cards -->
        <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
            <div class="w-full relative flex items-center justify-center">
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev2">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>

                <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider2" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <!-- Card 1 -->
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto no-scrollbar">
                            <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll no-scrollbar">
                                <div class="w-60">
                                    <a href="/embroidery">
                                        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                                            <img src="images/homepage/label.png" alt="Labels" class="w-66 h-66 object-contain object-center" />
                                        </div>
                                        <h3 class="text-xl font-semibold mt-4 pb-8">Labels</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto no-scrollbar">
                            <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll no-scrollbar">
                                <div class="w-60">
                                    <a href="/embroidery">
                                        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                                            <img src="images/homepage/jars.png" alt="Jars" class="w-66 h-66 object-contain object-center" />
                                        </div>
                                        <h3 class="text-xl font-semibold mt-4 pb-8">Jars</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto no-scrollbar">
                            <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll no-scrollbar">
                                <div class="w-60">
                                    <a href="/embroidery">
                                        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                                            <img src="images/homepage/postcard2.png" alt="Postcards" class="w-66 h-66 object-contain object-center" />
                                        </div>
                                        <h3 class="text-xl font-semibold mt-4 pb-8">Postcards</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto no-scrollbar">
                            <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll no-scrollbar">
                                <div class="w-60">
                                    <a href="/embroidery">
                                        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                                            <img src="images/homepage/silkbag.png" alt="Silkscreen" class="w-56 h-56 object-contain object-center" />
                                        </div>
                                        <h3 class="text-xl font-semibold mt-4 pb-8">Silkscreen</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto no-scrollbar">
                            <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll no-scrollbar">
                                <div class="w-60">
                                    <a href="/embroidery">
                                        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                                            <img src="images/homepage/business.png" alt="Business Cards" class="w-66 h-66 object-contain object-center" />
                                        </div>
                                        <h3 class="text-xl font-semibold mt-4 pb-8">Business Cards</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto no-scrollbar">
                            <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll no-scrollbar">
                                <div class="w-60">
                                    <a href="/embroidery">
                                        <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                                            <img src="images/homepage/flyer.png" alt="Flyers" class="w-66 h-66 object-contain object-center" />
                                        </div>
                                        <h3 class="text-xl font-semibold mt-4 pb-8">Flyers</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="next2">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>






    </div> 



<!-- Products -->

<x-product-carousel :title="'Create Brands with us'" :products='json_encode([
    ["title" => "Ember Valley", "image" => "images/homepage/ember.png", "url" => ""],
    ["title" => "DC Collectives", "image" => "images/homepage/dccollective.png", "url" => ""],
    ["title" => "Traditional", "image" => "images/homepage/traditional.png", "url" => ""],
    ["title" => "Wafers", "image" => "images/homepage/wafers.png", "url" => ""],
    ["title" => "Coast to Coast", "image" => "images/homepage/coast.png", "url" => ""],
    ["title" => "Herbarium", "image" => "images/homepage/Herbarium.png", "url" => ""],
    ["title" => "Maven", "image" => "images/homepage/Maven.png", "url" => ""],
    ["title" => "VBX", "image" => "images/homepage/VBX.png", "url" => ""],
    ["title" => "Chyll", "image" => "images/homepage/Chyll.png", "url" => ""],
])'/>

<!-- more services -->

<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">Other Services</h2>

        <!-- Cards Section -->
        <div class="flex flex-wrap justify-center items-center lg:justify-center">
           
            <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class=" bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset('images/homepage/loud.png') }}" alt="" class="w-full h-72 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Cad Cut </h3>
            </div>

            <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset('images/homepage/glass.png') }}" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Label Application</h3>
            </div>

             <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset('images/homepage/silkt.png') }} " alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Fufillment </h3>
            </div>

             <div class="w-60 mb-8 md:mb-0 md:w-1/4">
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="" alt="" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">Delivery Service  </h3>
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
