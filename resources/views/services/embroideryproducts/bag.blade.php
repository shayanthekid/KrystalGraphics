@extends('layouts.app')

@section('content')
 <style>
    /* .transition2 {
    -webkit-transform: scale(1.6); 
    -moz-transform: scale(1.6);
    -o-transform: scale(1.6);
    transform: scale(1.6);
}
#content {
	-webkit-transition: all .4s ease-in-out;
	-moz-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	-ms-transition: all .4s ease-in-out;
} */

#content {
    overflow: hidden;
    position: relative;
}

.transition2 {
    transform: scale(1.6);
    /* Only apply transition to the transform property, not transform-origin */
    transition: transform .4s ease-in-out;
}

#content img {
    /* Remove transition from transform-origin */
    transition: transform .4s ease-in-out;
}
 </style>

<div class="bg-gray-100 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4 overflow-hidden" >
                <div x-data="carousel" class="h-[460px] rounded-lg  mb-4 relative ">
                
                    <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out w-full h-64 relative anim-carousel">
            <!-- Images will be dynamically added here -->
            <template x-for="(image, index) in images" :key="index">
                {{-- <div class="w-full h-96 flex-shrink-0" id="content">
                    <img :src="image" :alt="'Image ' + (index + 1)"  class="object-contain object-center w-full h-full ">
                </div> --}}
                <div class="w-full h-96 flex-shrink-0" id="content">
    <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
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
                {{-- Title --}}
                <h2 class="text-2xl font-bold mb-2 hero-text" style="opacity: 0">Bags</h2>
                {{-- Description --}}
                <p class="text-gray-600 text-sm mt-2 hero-para" style="opacity: 0">
             
Embroidery on bags adds a touch of elegance and personalization to your accessories. Using high-quality threads and precise stitching, we create intricate and durable designs that make your bags stand out. Whether it's for a corporate gift, promotional item, or personal use, embroidery adds a unique and professional touch. Our embroidery services offer a wide array of color choices and customization options, ensuring your bags become a stylish and memorable statement piece, reflecting your brand or individual style with sophistication and lasting quality. 


                    </p>
                
              
                <div class="mb-4">
          
                    <div class="flex items-center mt-8 gap-5">
                                 <a href="#" class="inline-block px-6 py-3 text-white bg-black rounded-full shadow-md hover:bg-opacity-80 transition duration-300 anim-button" style="opacity: 0">Download Brochure</a>
            <a href="{{ route('contact') }}" class="inline-block px-6 py-3 text-black bg-white rounded-full shadow-md hover:bg-gray-200 transition duration-300 anim-button" style="opacity: 0">Contact Us</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    const tl = gsap.timeline();
   tl.to(".hero-text", 1, {
    opacity: 1,
  y: 25,
  ease: "power4.inOut",
  stagger: {
    amount: 0.3
  }
})

const tl2 = gsap.timeline();
tl2.to(".hero-para", 1, {
    opacity: 1,
  y: 25,
  ease: "power4.inOut",
  stagger: {
    amount: 0.3
  }
})


const tl3 = gsap.timeline();

tl3.fromTo('.anim-carousel',
{
 
    opacity: 0,
},
 {
     opacity: 1, // Start with opacity 0
     // Start below the viewport
    duration: 0.5, // Animation duration in seconds
    delay:0.2,
    ease: 'power3.out', // Easing function
  });

const tl4 = gsap.timeline();

tl4.to('.anim-button',

 {
     opacity: 1, // Start with opacity 0
     y:10,
  ease: "power4.inOut",
  });


</script>

<script>
    // Pictures
    function carousel() {
        return {
            images: [
            '{{ asset('images/services/embroidery/bag.png') }}',
           // Add more image URLs as needed
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
    $(document).ready(function(){
    $('#content').hover(function() {
        $("#content").addClass('transition2');
    
    }, function() {
        $("#content").removeClass('transition2');
    });
});
</script> --}}
<script>
$(document).ready(function(){
    // Function to set the transform origin based on position
    function setTransformOrigin(elem, posX, posY) {
        var originX = posX / elem.width() * 100;
        var originY = posY / elem.height() * 100;
        elem.find('img').css({
            'transform-origin': `${originX}% ${originY}%`
        });
    }

    // Mouse events for desktop
    $('#content').mousemove(function(e) {
        var magnifyOffset = $(this).offset();
        var mouseX = e.pageX - magnifyOffset.left;
        var mouseY = e.pageY - magnifyOffset.top;
        setTransformOrigin($(this), mouseX, mouseY);
    }).hover(function() {
        $(this).find('img').addClass('transition2');
    }, function() {
        $(this).find('img').removeClass('transition2').css({
            'transform-origin': 'center center'
        });
    });

    // Touch events for mobile
    $('#content').on('touchmove', function(e) {
        // Prevent the default scroll behavior
        e.preventDefault();

        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        var magnifyOffset = $(this).offset();
        var touchX = touch.pageX - magnifyOffset.left;
        var touchY = touch.pageY - magnifyOffset.top;
        setTransformOrigin($(this), touchX, touchY);
    }).on('touchstart', function() {
        $(this).find('img').addClass('transition2');
    }).on('touchend', function() {
        $(this).find('img').removeClass('transition2').css({
            'transform-origin': 'center center'
        });
    });
});
</script>

@endsection
