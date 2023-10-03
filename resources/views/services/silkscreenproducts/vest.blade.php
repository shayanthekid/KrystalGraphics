@extends('layouts.app')

@section('content')
 <div class="container grid grid-cols-1 md:grid-cols-2 mt-10">

<div x-data="carousel"  class="relative bg-[#D9D9D9] w-full max-w-screen-lg mx-auto p-3 ">
    <div class="relative overflow-hidden rounded-lg">
        <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
            <!-- Images will be dynamically added here -->
            <template x-for="(image, index) in images" :key="index">
                <div class="w-full h-96 flex-shrink-0">
                    <img :src="image" :alt="'Image ' + (index + 1)"  class="object-contain object-center w-full h-full">
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
        <h2 class="text-2xl font-semibold text-left mb-2 py-4">Saftey Vest</h2>
        <p class="text-gray-700 leading-relaxed mb-4 py-4">
            
     Silk screen printing on safety vests is a reliable and practical method for enhancing visibility and safety in various work environments. This process involves transferring specialized ink through a fine mesh screen onto the safety vest fabric, creating highly visible and durable designs that meet safety standards. Whether it's for construction crews, event staff, or emergency responders, silk screen printing on safety vests allows for clear branding, company logos, or reflective markings that enhance visibility during low-light conditions. Choose this customization method to ensure your team's safety gear not only meets regulatory requirements but also promotes your brand or organization effectively.

        
        </p>
        <div class="flex space-x-4 py-4">
            <a href="#" class="inline-block px-6 py-3 text-white bg-black rounded-full shadow-md hover:bg-opacity-80 transition duration-300">Download Brochure</a>
            <a href="{{ route('contact') }}" class="inline-block px-6 py-3 text-black bg-white rounded-full shadow-md hover:bg-gray-200 transition duration-300">Contact Us</a>
        </div>
    </div>
</div>
</div>

</div>


<script>
    function carousel() {
        return {
             images: [
           '{{ asset('images/services/vest/vest.jpg') }}',
            '{{ asset('images/services/vest/vest2.jpg') }}',
          
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
