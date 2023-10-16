@extends('layouts.app')

@section('content')
@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Hero Section -->
   
{{-- <div class="bg-[#DCDCDC] py-16 md:py-0 md:px-16 lg:py-0 overflow-hidden"> --}}
<div class="bg-black py-16 md:py-0 md:px-16 lg:py-0 overflow-hidden hero-bg">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full">
            <div class="text-center lg:text-left text-black lg:-mt-32">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-5xl lg:py-10 hero-text" style="opacity: 0;">
    Print Perfection
</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-lg p-4 lg:p-0 hero-para ">
                    Unlocking Creativity, One Print at a Time! Your Source for Printing, Packaging, Promotional Items and More… 
                </p>
                <a href="{{ route('contact') }}" class="mt-14 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left font-roboto hero-button" style="opacity: 0">Contact Us</a>
            </div>
        </div>

        <div class="hidden lg:flex lg:w-full lg:items-end lg:justify-end col-span-2 ml-20 ">
            <img src="{{ asset('images/homepage/HEROIMG2.png') }}" alt="" class="w-full hero-image" style="max-width: 100%; height: auto; ">
        </div>
    </div>
</div>


{{-- Banner --}}
     <div class="text-center lg:text-left text-black bg-[#FFC414]">
                <h1 class="p-5 sm:text-sm  font-semibold font-montserrat lg:text-3xl lg:py-10 text-center">
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
])' :columns="5"/>
   



<div class="py-16 bg-[#DCDCDC]">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8 ml-2 text-center">Create Brands with us</h2>

        <!-- This will be displayed on smaller screens (mobile view) -->
   <div
    x-data="{}"
    x-init="$nextTick(() => {
        let ul = $refs.logos;
        ul.insertAdjacentHTML('afterend', ul.outerHTML);
        ul.nextSibling.setAttribute('aria-hidden', 'true');
    })"
    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]"
>
    <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/ember.png" alt="Ember Valley" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/dccollective.png" alt="DC Collectives" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/wafers.png" alt="Wafers" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/coast.png" alt="Coast to Coast" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/Herbarium.png" alt="Herbarium" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/Maven.png" alt="Maven" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/44.png" alt="APC" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/77.png" alt="770" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/78.png" alt="ATSEI" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/afscme.png" alt="AFSCME" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/ava.png" alt="Aava" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/cannabis.png" alt="UFCW" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/Cintas.png" alt="Cintas" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/ethix.png" alt="Ethix" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/guild.png" alt="DGA" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/HanzDeFuko.jpg" alt="HANZDEFuko" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/holy.png" alt="HJM" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/omni.png" alt="Omni" class="w-20 max-h-20" />
        </li>
        <li class="w-auto h-auto p-2">
            <img src="images/homepage/logos/voyant.png" alt="Voyant" class="w-20 max-h-20" />
        </li>
    </ul>                
</div>
    </div>
      
    </div>





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
 
])' :columns="4"/>


<script>
    function carousel() {
        return {
             images: [
            '{{ asset('images/bannertemp/banner2.png') }}',
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
tl2.to(".hero-para", {
 opacity: 0, // Fade in to full opacity

}).from(".hero-para",{
    opacity:1,
     y: 15, // No vertical movement
  duration: 1, // Animation duration in seconds
  ease: "power3.out", // Easing function
})


const tl3 = gsap.timeline();
tl3.fromTo(".hero-button", 
 {
    opacity: 0,
  
 },
{ 
   backgroundColor: "#FFC414", // Change background color to yellow
    color: "white", // Change text color to white
    opacity: 1, 
    duration: 0.5,
    delay: 0.5,
    ease: "power2.inOut",
});

const tl4 = gsap.timeline();
tl4.to(".hero-bg", {

  backgroundColor: "#DCDCDC", // Change background color to yellow
    delay: 0.2,
}
)

const tl5 = gsap.timeline();
tl5.fromTo(".hero-image", 1, {
    opacity: 0, 
    
},{
    opacity: 1,
    duration: 0.5,
    ease: "power2.inOut",
})

tl.play();
tl2.play();
tl3.play();
tl4.play();
  // Wait for the document to be ready
//   document.addEventListener("DOMContentLoaded", function () {
//     // Define the animation

 

//     gsap.to(".hero-text", {
//       opacity: 1, // Fade in to full opacity
//       y: 35, // Move in the Y direction (0 means no movement)
//       duration: 1.4, // Animation duration in seconds
//       ease: "power3.out", // Easing function
//     });

// gsap.to(".hero-text + p", { // Select the <p> element following the <h1> using the adjacent sibling combinator
//       opacity: 1, // Fade in to full opacity
//       y: 20, // No vertical movement
//       duration: 1.4, // Animation duration in seconds
//       ease: "power3.out", // Easing function
//     });

//      gsap.to(".hero-text + p + a", {
//       backgroundColor: "#FFC414", // Change background color to yellow
//       color: "white", // Change text color to white
//       delay: 1,
//       duration: 0.4, // Animation duration in seconds
//       ease: "power4.out", // Easing function
//     });

//     gsap.from(".hero-image", {
//         x:50,
//         opacity: 0,
//         duration: 1.5,
//     });


//   });

 
   



</script>


<script>
let t1 = gsap.timeline({

    scrollTrigger: {
        trigger: '.animate-section-5',
        start: 'top center',
        end: '80% center',
        scrub: false,
        markers: false,
    }
});

t1.fromTo('.animate-section-5',
{

    opacity: 0,
},
 {
    opacity: 1, // Start with opacity 0
    y: 10,     // Start below the viewport
    duration: 0.5, // Animation duration in seconds
    delay:0.2,
    ease: 'power4.inOut', // Easing function
  });

let t2 = gsap.timeline({

    scrollTrigger: {
        trigger: '.animate-section-4',
        start: 'top center',
        end: '80% center',
        scrub: false,
        markers: false,
    }
});

t2.fromTo('.animate-section-4',
{
 
    opacity: 0,
},
 {
    opacity: 1, // Start with opacity 0
    y: 10,     // Start below the viewport
    duration: 0.5, // Animation duration in seconds
    delay:0.2,
    ease: 'power4.inOut', // Easing function
  });
//   // Initialize a variable to keep track of whether the animation has played
//   let animationPlayed = false;

//   // Function to handle the animation
//   function animateSection() {
//     if (!animationPlayed) {
//       gsap.to(".animate-section", {
//         opacity: 1,      // Start with opacity 0 (hidden)
//         y: 0,           // Move down (or any desired animation)
//         duration: 1,     // Animation duration in seconds
//         ease: "power1.out", // Easing function
//       });
//       // Set the animationPlayed variable to true to prevent it from playing again
//       animationPlayed = true;
//     }
//   }

//   Observer.create({
//     target: window,
//     type: "wheel,touch",
//     onDown: () => {
//       // Call the animation function when scrolling down
//       animateSection();
//     },
//   });
</script>



@endsection
