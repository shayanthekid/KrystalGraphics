@extends('layouts.app')

@section('content')
 
<div class="bg-gray-100 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4 overflow-hidden" >
                <div x-data="carousel" class="h-[460px] rounded-lg bg-gray-300 mb-4 relative">
                    <!-- Image Carousel -->
                    <!-- <div x-ref="slider" class="w-full h-64 relative">
                        <template x-for="(image, index) in images" :key="index">
                            <div class="carousel-item absolute inset-0 w-full h-full">
                                <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                            </div>
                        </template>
                    </div> -->
                    <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out w-full h-64 relative">
            <!-- Images will be dynamically added here -->
            <template x-for="(image, index) in images" :key="index">
                <div class="w-full h-96 flex-shrink-0">
                    <img :src="image" :alt="'Image ' + (index + 1)"  class="object-contain object-center w-full h-full">
                </div>
            </template>
        </div>

                    <!-- Navigation Buttons -->
                    <div class="absolute inset-y-0 left-0 flex items-center">
                        <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                            <
                        </button>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover-bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                            >
                        </button>
                    </div>

                    <!-- Blob Indicators -->
                    <div class="flex justify-center mt-4 space-x-2 relative">
                        <template x-for="(image, index) in images" :key="index">
                            <div @click="changeImage(index)" :class="{ 'bg-black': activeImage === index, 'bg-gray-600': activeImage !== index }" class="w-3 h-3 rounded-full cursor-pointer"></div>
                        </template>
                    </div>
                </div>
            </div>

            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold mb-2">Product Name</h2>
                <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                    ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700">Price:</span>
                        <span class="text-gray-600">$29.99</span>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700">Availability:</span>
                        <span class="text-gray-600">In Stock</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="font-bold text-gray-700">Select Color:</span>
                    <div class="flex items-center mt-2">
                        <button class="w-6 h-6 rounded-full bg-gray-800 mr-2"></button>
                        <button class="w-6 h-6 rounded-full bg-red-500 mr-2"></button>
                        <button class="w-6 h-6 rounded-full bg-blue-500 mr-2"></button>
                        <button class="w-6 h-6 rounded-full bg-yellow-500 mr-2"></button>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="font-bold text-gray-700">Select Size:</span>
                    <div class="flex items-center mt-2">
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">S</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">M</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">L</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">XL</button>
                        <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400">XXL</button>
                    </div>
                </div>
                <div>
                    <span class="font-bold text-gray-700">Product Description:</span>
                    <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
                        lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
                        ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
                        sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                    </p>
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
           '{{ asset('images/services/tshirt/shirt2.jpg') }}',
            '{{ asset('images/services/tshirt/shirt2.png') }}',
            '{{ asset('images/services/tshirt/shirt3.png') }}'
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
