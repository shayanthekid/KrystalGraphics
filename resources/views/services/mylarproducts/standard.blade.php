@extends('layouts.app')

@section('content')
 <div class="container grid grid-cols-1 md:grid-cols-2 mt-10">

    <!-- first column-->
{{-- <div x-data="carousel()" class="bg-[#D9D9D9] relative -z-10">
    <!-- Left Arrow -->
    <div @click="prevImage" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </div>

    <!-- Image Carousel -->
    <div class="w-full h-64 relative">
        <template x-for="(image, index) in images" :key="index">
            <div x-show="activeImage === index" class="carousel-item absolute inset-0 w-full h-full">
                <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
            </div>
        </template>
    </div>

    <!-- Right Arrow -->
    <div @click="nextImage" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </div>

    <!-- Blob Indicators -->
    <div class="flex justify-center mt-4 space-x-2 relative">
        <template x-for="(image, index) in images" :key="index">
            <div @click="changeImage(index)" :class="{ 'bg-black': activeImage === index, 'bg-gray-600': activeImage !== index }" class="w-3 h-3 rounded-full cursor-pointer"></div>
        </template>
    </div>
</div> --}}
<div x-data="carousel"  class="relative bg-[#D9D9D9] w-full max-w-screen-lg mx-auto p-3 ">
    <div class="relative overflow-hidden rounded-lg">
        <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
            <!-- Images will be dynamically added here -->
            <template x-for="(image, index) in images" :key="index">
                <div class="w-full h-96 flex-shrink-0">
                    <img :src="image" :alt="'Image ' + (index + 1)"  class="object-fit object-center  w-full h-full">
                </div>
            </template>
        </div>
    </div>
    
    <!-- Navigation Buttons -->
    <div class="absolute inset-y-0 left-0 flex items-center">
        <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700  transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
            <
        </button>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center ">
        <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700  transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
            >
        </button>
    </div>
</div>


<div class="bg-[#FCFCFC]">
<!-- Additional Content -->
 <div class="col-span-2 md:col-span-1  px-4 py-16 md:w-full">
        <h2 class="text-2xl font-semibold text-left mb-2 py-4">Mylar </h2>
        <p class="text-gray-700 leading-relaxed mb-4 py-4">
            
Elevate your product packaging with our Mylar bag printing services, available in two versatile options. Our standard-sized Mylar bags combine functionality with eye-catching design, ensuring your products remain fresh while leaving a lasting impression. For those seeking a unique touch, our custom-shaped Mylar bags offer endless possibilities for creative branding. With state-of-the-art printing technology and a commitment to quality, we transform Mylar bags into powerful tools for your brand's identity and marketing strategy. Whether you choose standard or custom, our precision printing ensures that your packaging stands out, making every unboxing experience exceptional and memorable.
        
        
        
        
        </p>
        <div class="flex space-x-4 py-4">
            <a href="#" class="inline-block px-6 py-3 text-white bg-black rounded-full shadow-md hover:bg-opacity-80 transition duration-300">Download Brochure</a>
            <a href="{{ route('contact') }}" class="inline-block px-6 py-3 text-black bg-white rounded-full shadow-md hover:bg-gray-200 transition duration-300">Contact Us</a>
        </div>
    </div>
</div>
</div>

</div>

{{-- <script>
function carousel() {
    return {
        activeImage: 0,
        images: [
            '{{ asset('images/homepage/cap.png') }}',
            '{{ asset('images/homepage/pomade.png') }}',
            'image3.jpg', // Add more image URLs as needed
        ],
        nextImage() {
            this.activeImage = (this.activeImage + 1) % this.images.length;
        },
        prevImage() {
            this.activeImage = (this.activeImage - 1 + this.images.length) % this.images.length;
        },
        changeImage(index) {
            this.activeImage = index;
        },
    };
}
</script> --}}

<script>
    function carousel() {
        return {
             images: [
           '{{ asset('images/services/mylar/weed.png') }}',
            '{{ asset('images/services/mylar/weed2.png') }}',
            '{{ asset('images/services/mylar/weed3.png') }}',
    
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

@endsection
