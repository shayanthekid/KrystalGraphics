@extends('layouts.app') <!-- Use your layout file here -->

@section('content')
<style>
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
     <div x-data="carousel" class="h-[460px] rounded-lg mb-4 relative ">
    <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out w-full h-64 relative anim-carousel">
        <!-- Loop through each media item -->
    <template x-for="(media, index) in mediaItems.filter(item => item.type === 'image')" :key="index">
            <div class="w-full h-96 flex-shrink-0" id="content">
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
    $('#content').mousemove(function(e) {
        var $container = $(this);
        var magnifyOffset = $container.offset();
        var mouseX = e.pageX - magnifyOffset.left;
        var mouseY = e.pageY - magnifyOffset.top;

        // Ensure the coordinates are within the bounds of the container
        if (mouseX < 0) { mouseX = 0; }
        if (mouseY < 0) { mouseY = 0; }
        if (mouseX > $container.width()) { mouseX = $container.width(); }
        if (mouseY > $container.height()) { mouseY = $container.height(); }

        // Set the origin of the transform to the mouse coordinates without transition
        var originX = mouseX / $container.width() * 100;
        var originY = mouseY / $container.height() * 100;
        $container.find('img').css({
            'transform-origin': `${originX}% ${originY}%`,
            'transition-property': 'transform', // Only transition transform property
        });
    });

    $('#content').hover(function() {
        $(this).find('img').addClass('transition2');
    }, function() {
        $(this).find('img').removeClass('transition2').css({
            'transform-origin': 'center center',
            'transition-property': 'transform' // Reset transition property
        });
    });
});
</script>

@endsection