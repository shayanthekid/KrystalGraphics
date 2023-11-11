@extends('layouts.app') <!-- Use your layout file here -->

@section('content')
<style>
.content {
    overflow: hidden;
    position: relative;
}

.transition2 {
    transform: scale(2);
    transition: transform .4s ease-in-out;
}

.content img {
    transition: transform .4s ease-in-out;
}
</style>


<div class="bg-gray-100 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4 overflow-hidden" >
     <div x-data="carousel" class="h-[460px] rounded-lg mb-4 relative ">
    <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out w-full h-64 relative anim-carousel">
        <!-- Loop through each media item -->
    <template x-for="(media, index) in mediaItems.filter(item => item.type === 'image')" :key="index">
    <div class="w-full h-96 flex-shrink-0 content">
        <img :src="media.url" :alt="media.title" class="object-contain object-center w-full h-full">
    </div>
</template>

        
        <!-- Loop for Videos -->
      <template x-for="(media, index) in mediaItems.filter(item => item.type === 'video')" :key="index">
    <div class="w-full h-96 flex-shrink-0 relative">
        <video class="object-cover object-center absolute top-0 left-0 w-full h-full" controls>
            <source :src="media.url" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</template>
     {{-- <button @click="console.log(mediaItems[1].type)">Log mediaItems</button> --}}


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
                <h2 class="text-2xl font-bold mb-2 hero-text" style="opacity: 0">{{ $product->title }}</h2>
                {{-- Description --}}
                <p class="text-gray-600 text-sm mt-2 hero-para" style="opacity: 0">
             
{{ $product->description }}
{{-- {{ $product->subcategory->imgsrc }} --}}

                    </p>
                
              
        <div class="flex items-center mt-8 gap-5">
    <!-- Download Brochure Link -->
            {{-- Live code --}}
 {{-- @if ($product->subcategory && $product->subcategory->imgsrc)
@php
                    $brochureurl = str_replace('storage', 'public/storage', $product->subcategory->imgsrc);
                   
                    @endphp

    
        <a href="{{ asset($brochureurl) }}" class="inline-block px-6 py-3 text-white bg-black rounded-full shadow-md hover:bg-opacity-80 transition duration-300 anim-button">Download Brochure</a>
    @else --}}

    @if ($product->subcategory && $product->subcategory->imgsrc)
        <a href="{{ asset($product->subcategory->imgsrc) }}" class="inline-block px-6 py-3 text-white bg-black rounded-full shadow-md hover:bg-opacity-80 transition duration-300 anim-button">Download Brochure</a>
    @else
        <button onclick="showBrochureAlert()" class="inline-block px-6 py-3 text-white bg-black rounded-full shadow-md hover:bg-opacity-80 transition duration-300 anim-button">Download Brochure</button>
    @endif

    <!-- Contact Us Link -->
    <a href="{{ route('contact') }}" class="inline-block px-6 py-3 text-black bg-white rounded-full shadow-md hover:bg-gray-200 transition duration-300 anim-button">Contact Us</a>
</div>


            </div>
        </div>
    </div>
</div>

 {{-- @foreach ($product->images as $image)
            <img src="{{ asset(str_replace('public', 'storage', $image->filename)) }}" alt="{{ $product->title }}">
            @endforeach  --}}
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
 {{-- @foreach ($product->images as $image)
            <img src="{{ asset(str_replace('public', 'storage', $image->filename)) }}" alt="{{ $product->title }}">
            @endforeach --}}
<script>

//   const productImages = @json($product->images);

//     // Function to determine media type based on the URL
//     function getMediaType(url) {
//         if (url.includes('/image/')) {
//             return 'image';
//         } else if (url.includes('/video/')) {
//             return 'video';
//         }
//         // Add more cases if needed
//         return 'unknown'; // Default to 'unknown' if the URL doesn't match image or video patterns
//     }

//     const mediaItems = productImages.map(image => {
//         const type = getMediaType(image.filename);
//         const url = '{{ asset('') }}' + image.filename.replace('public/', 'storage/');

//         return {
//             type,
//             url,
//             title: image.title,
//         };
//     });

    // Pictures
   function carousel() {
    const productImages = @json($product->images);

    // Function to determine media type based on the URL
    function getMediaType(url) {
        if (url.includes('/image/')) {
            return 'image';
        } else if (url.includes('/video/')) {
            return 'video';
        }
        // Add more cases if needed
        return 'unknown'; // Default to 'unknown' if the URL doesn't match image or video patterns
    }

    const mediaItems = productImages.map(image => {
        const type = getMediaType(image.filename);
        const url = '{{ asset('') }}' + image.filename.replace('public/', 'storage/');
        // const url = '{{ asset('') }}' + image.filename.replace('public/', '/public/storage/');

        return {
            type,
            url,
            title: image.title,
        };
    });

    return {
        mediaItems, // add this line
        currentIndex: 0,
        slider: null,
        init() {
            this.slider = this.$refs.slider;
        },
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.mediaItems.length; // change this.images to this.mediaItems
            this.slideToCurrentIndex();
        },
        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.mediaItems.length) % this.mediaItems.length; // change this.images to this.mediaItems
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
$(document).ready(function(){
    function setTransformOrigin(elem, posX, posY) {
        var originX = posX / elem.width() * 100;
        var originY = posY / elem.height() * 100;
        elem.css({
            'transform-origin': `${originX}% ${originY}%`
        });
    }

    $('.content').each(function() {
        $(this).mousemove(function(e) {
            var magnifyOffset = $(this).offset();
            var mouseX = e.pageX - magnifyOffset.left;
            var mouseY = e.pageY - magnifyOffset.top;
            setTransformOrigin($(this).find('img'), mouseX, mouseY);
        }).hover(function() {
            $(this).find('img').addClass('transition2');
        }, function() {
            $(this).find('img').removeClass('transition2').css({
                'transform-origin': 'center center'
            });
        });

        $(this).on('touchmove', function(e) {
            e.preventDefault();
            var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
            var magnifyOffset = $(this).offset();
            var touchX = touch.pageX - magnifyOffset.left;
            var touchY = touch.pageY - magnifyOffset.top;
            setTransformOrigin($(this).find('img'), touchX, touchY);
        }).on('touchstart', function() {
            $(this).find('img').addClass('transition2');
        }).on('touchend', function() {
            $(this).find('img').removeClass('transition2').css({
                'transform-origin': 'center center'
            });
        });
    });
});
</script>
<script>
    function showBrochureAlert() {
        console.log("fgfg");
        alert('Brochure Not Available');
    }
</script>

@endsection