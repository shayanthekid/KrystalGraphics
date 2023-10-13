@extends('layouts.app')

@section('content')
@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Hero Section -->
   
<div class="bg-[#DCDCDC] py-16 md:py-0 lg:py-0 overflow-hidden">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full">
            <div class="text-center lg:text-left text-black lg:-mt-32">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-5xl lg:py-10 hero-text" style="opacity: 0;">
    Print Perfection
</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-lg p-4 lg:p-0 ">
                    Unlocking Creativity, One Print at a Time! Your Source for Printing, Packaging, Promotional Items and More… 
                </p>
                <a href="{{ route('contact') }}" class="mt-14 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left font-roboto">Contact Us</a>
            </div>
        </div>

        <div class="hidden lg:flex lg:w-full lg:items-end lg:justify-end col-span-2 ml-20 ">
            <img src="{{ asset('images/homepage/HEROIMG2.png') }}" alt="" class="w-full" style="max-width: 100%; height: auto;">
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
 

   
])' :columns="5"/>
   




<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">Create Brands with us</h2>


<div class="lg:hidden">
        <!-- This will be displayed on smaller screens (mobile view) -->
    <!-- Grid of Logos -->
         <div class="grid grid-cols-5  gap-x-11 gap-y-8 justify-center">
            <!-- Logo 1 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/ember.png" alt="Ember Valley" class="w-36 h-auto" />
            </div>

            <!-- Logo 2 -->
            <div class="w-full flex items-center justify-center">
            
                <img src="images/homepage/dccollective.png" alt="DC Collectives" class="w-36 h-auto" />
            </div>

            <!-- Logo 3 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/wafers.png" alt="Wafers" class="w-36 h-auto" />
            </div>

            <!-- Logo 4 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/coast.png" alt="Coast to Coast" class="w-36 h-auto" />
            </div>

            <!-- Logo 5 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/Herbarium.png" alt="Herbarium" class="w-36 h-auto" />
            </div>

            <!-- Logo 6 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/Maven.png" alt="Maven" class="w-36 h-auto" />
            </div>

            <!-- Logo 7 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/44.png" alt="APC" class="w-36 h-auto" />
            </div>

            <!-- Logo 8 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/77.png" alt="770" class="w-36 h-auto" />
            </div>

            <!-- Logo 9 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/78.png" alt="ATSEI" class="w-36 h-auto" />
            </div>

            <!-- Logo 10 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/afscme.png" alt="AFSCME" class="w-36 h-auto" />
            </div>

            <!-- Logo 11 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/ava.png" alt="Aava" class="w-36 h-auto" />
            </div>

            <!-- Logo 12 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/cannabis.png" alt="UFCW" class="w-36 h-auto" />
            </div>

            <!-- Logo 13 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/Cintas.png" alt="Cintas" class="w-36 h-auto" />
            </div>

            <!-- Logo 14 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/ethix.png" alt="Ethix" class="w-36 h-auto" />
            </div>

            <!-- Logo 15 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/guild.png" alt="DGA" class="w-36 h-auto" />
            </div>

            <!-- Logo 16 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/HanzDeFuko.jpg" alt="HANZDEFuko" class="w-36 h-auto" />
            </div>

            <!-- Logo 17 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/holy.png" alt="HJM" class="w-36 h-auto" />
            </div>

            <!-- Logo 18 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/omni.png" alt="Omni" class="w-36 h-auto" />
            </div>

            <!-- Logo 19 -->
            <div class="w-full flex items-center justify-center">
                <img src="images/homepage/logos/voyant.png" alt="Voyant" class="w-36 h-auto" />
            </div>
        </div> 
    </div>
    <div class="hidden lg:block">
        <!-- This will be displayed on larger screens (not mobile view) -->
 
<div class="wrapper overflow-hidden">
  <div class="imageContainer flex flex-row gap-6 md:gap-25 w-full h-32 md:w-full" id="imageContainer">
    <!-- Add your logo images using the provided paths -->
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/ember.png" alt="Ember Valley" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/dccollective.png" alt="DC Collectives" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/wafers.png" alt="Wafers" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/coast.png" alt="Coast to Coast" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/Herbarium.png" alt="Herbarium" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/Maven.png" alt="Maven" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/44.png" alt="APC" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/77.png" alt="770" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/78.png" alt="ATSEI" class="w-32 md:w-auto h-auto">
    </div>
    <div class= "image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/afscme.png" alt="AFSCME" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/ava.png" alt="Aava" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/cannabis.png" alt="UFCW" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/Cintas.png" alt="Cintas" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/ethix.png" alt="Ethix" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/guild.png" alt="DGA" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/HanzDeFuko.jpg" alt="HANZDEFuko" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/holy.png" alt="HJM" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/omni.png" alt="Omni" class="w-32 md:w-auto h-auto">
    </div>
    <div class="image h-64 md:h-96 w-full md:w-1/2 bg-cover bg-center">
      <img src="images/homepage/logos/voyant.png" alt="Voyant" class="w-32 md:w-auto h-auto">
    </div>
  </div>
</div>


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


<script>
  // Wait for the document to be ready
  document.addEventListener("DOMContentLoaded", function () {
    // Define the animation
    gsap.to(".hero-text", {
      opacity: 1, // Fade in to full opacity
      y: 35, // Move in the Y direction (0 means no movement)
      duration: 0.85, // Animation duration in seconds
      ease: "power3.out", // Easing function
    });
  });

 gsap.to(".hero-text + p", { // Select the <p> element following the <h1> using the adjacent sibling combinator
      opacity: 1, // Fade in to full opacity
      y: 20, // No vertical movement
      duration: 0.85, // Animation duration in seconds
      ease: "power3.out", // Easing function
    });

     gsap.to(".hero-text + p + a", {
      backgroundColor: "#FFC414", // Change background color to yellow
      color: "white", // Change text color to white
      delay: 1,
      duration: 0.4, // Animation duration in seconds
      ease: "power4.out", // Easing function
    });
// gsap.to(".hero-text + p + a", { // Select the <a> element following the <p> using the adjacent sibling combinator
//       opacity: 1, // Fade in to full opacity
//       y: 15, // No vertical movement
//       duration: 0.2, // Animation duration in seconds
//       ease: "power4.out", // Easing function
//     });

</script>

<script>
 Observer.create({
  target: window,            // The target element (e.g., the window)
  type: "wheel,touch",       // Types of events to listen to (e.g., wheel and touch)
  onUp: () => {
    // Animation logic for upward motion
    gsap.to(".animate-section", {
      opacity: 0,      // End with opacity 1 (fully visible)
      y: 10,           // Move back to the original position
      duration: 1,     // Animation duration in seconds
      ease: "power4.out", // Easing function
    });
  },
  onDown: () => {
    // Animation logic for downward motion
    gsap.to(".animate-section", {
      opacity: 1,      // Start with opacity 0 (hidden)
      y: 0,           // Move down (or any desired animation)
      duration: 1,     // Animation duration in seconds
      ease: "power4.out", // Easing function
    });
  },
});

</script>


<script>

let loop = horizontalLoop(".image", {speed: 1, repeat: -1, paddingRight: 25});

function setDirection(value) {
  if (loop.direction !== value) {
    gsap.to(loop, {timeScale: value, duration: 0.3, overwrite: true});
    loop.direction = value;
  }
}

Observer.create({
  target: window,
  type: "wheel,scroll,touch",
  onDown: () => setDirection(1),
  onUp: () => setDirection(-1)
})



/*
This helper function makes a group of elements animate along the x-axis in a seamless, responsive loop.

Features:
 - Uses xPercent so that even if the widths change (like if the window gets resized), it should still work in most cases.
 - When each item animates to the left or right enough, it will loop back to the other side
 - Optionally pass in a config object with values like "speed" (default: 1, which travels at roughly 100 pixels per second), paused (boolean), repeat, reversed, and paddingRight.
 - The returned timeline will have the following methods added to it:
   - next() - animates to the next element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
   - previous() - animates to the previous element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
   - toIndex() - pass in a zero-based index value of the element that it should animate to, and optionally pass in a vars object to control duration, easing, etc. Always goes in the shortest direction
   - current() - returns the current index (if an animation is in-progress, it reflects the final index)
   - times - an Array of the times on the timeline where each element hits the "starting" spot. There's also a label added accordingly, so "label1" is when the 2nd element reaches the start.
 */
function horizontalLoop(items, config) {
  items = gsap.utils.toArray(items);
  config = config || {};
  let tl = gsap.timeline({repeat: config.repeat, paused: config.paused, defaults: {ease: "none"}, onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)}),
    length = items.length,
    startX = items[0].offsetLeft,
    times = [],
    widths = [],
    xPercents = [],
    curIndex = 0,
    pixelsPerSecond = (config.speed || 1) * 100,
    snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1), // some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
    totalWidth, curX, distanceToStart, distanceToLoop, item, i;
  gsap.set(items, { // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
    xPercent: (i, el) => {
      let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));
      xPercents[i] = snap(parseFloat(gsap.getProperty(el, "x", "px")) / w * 100 + gsap.getProperty(el, "xPercent"));
      return xPercents[i];
    }
  });
  gsap.set(items, {x: 0});
  totalWidth = items[length-1].offsetLeft + xPercents[length-1] / 100 * widths[length-1] - startX + items[length-1].offsetWidth * gsap.getProperty(items[length-1], "scaleX") + (parseFloat(config.paddingRight) || 0);
  for (i = 0; i < length; i++) {
    item = items[i];
    curX = xPercents[i] / 100 * widths[i];
    distanceToStart = item.offsetLeft + curX - startX;
    distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
    tl.to(item, {xPercent: snap((curX - distanceToLoop) / widths[i] * 100), duration: distanceToLoop / pixelsPerSecond}, 0)
      .fromTo(item, {xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100)}, {xPercent: xPercents[i], duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond, immediateRender: false}, distanceToLoop / pixelsPerSecond)
      .add("label" + i, distanceToStart / pixelsPerSecond);
    times[i] = distanceToStart / pixelsPerSecond;
  }
  function toIndex(index, vars) {
    vars = vars || {};
    (Math.abs(index - curIndex) > length / 2) && (index += index > curIndex ? -length : length); // always go in the shortest direction
    let newIndex = gsap.utils.wrap(0, length, index),
      time = times[newIndex];
    if (time > tl.time() !== index > curIndex) { // if we're wrapping the timeline's playhead, make the proper adjustments
      vars.modifiers = {time: gsap.utils.wrap(0, tl.duration())};
      time += tl.duration() * (index > curIndex ? 1 : -1);
    }
    curIndex = newIndex;
    vars.overwrite = true;
    return tl.tweenTo(time, vars);
  }
  tl.next = vars => toIndex(curIndex+1, vars);
  tl.previous = vars => toIndex(curIndex-1, vars);
  tl.current = () => curIndex;
  tl.toIndex = (index, vars) => toIndex(index, vars);
  tl.times = times;
  tl.progress(1, true).progress(0, true); // pre-render for performance
  if (config.reversed) {
    tl.vars.onReverseComplete();
    tl.reverse();
  }
  return tl;
}

</script>

@endsection
