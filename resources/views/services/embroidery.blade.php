@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl hero-text">Embroidery</h1>
          <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 hero-para">
              Embroidery is the art of decorating fabric with intricate and durable designs using specialized threads. It adds an element of sophistication and personalization to a variety of items, from apparel to promotional merchandise, creating visually appealing embellishments.
            </p>

        </div>
    </div>
</div>


<!-- Products -->
<x-product-carousel :title="'Products'" :products='json_encode([
    ["title" => "Bags", "image" => "images/services/embroidery/bag.png", "url" => "embroidery/bag"],
    ["title" => "Beanies", "image" => "images/services/embroidery/beanie.png", "url" => "embroidery/beanies"],
    ["title" => "Caps", "image" => "images/services/embroidery/caps/cap1.png", "url" => "embroidery/caps"],
    {{-- ["title" => "Hoodies", "image" => "images/services/embroidery/hoodie2.png", "url" => "embroidery/hoodies"], --}}
    ["title" => "Polo Tshirts", "image" => "images/services/embroidery/polo.png", "url" => "embroidery/polo"],

])' :columns="4"/>


<script>
  // Wait for the document to be ready
  document.addEventListener("DOMContentLoaded", function () {
    // Define the animation
    gsap.to(".hero-text", {
      opacity: 1, // Fade in to full opacity
      y: 25, // Move in the Y direction (0 means no movement)
      duration: 1.4, // Animation duration in seconds
      ease: "power3.out", // Easing function
    });
  });
  gsap.to(".hero-text + p", { // Select the <p> element following the <h1> using the adjacent sibling combinator
      opacity: 1, // Fade in to full opacity
      y: 20, // No vertical movement
      duration: 1.4, // Animation duration in seconds
      ease: "power3.out", // Easing function
    });

    

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
</script>

    <script>
let t1 = gsap.timeline({

    scrollTrigger: {
        trigger: '.animate-section-4',
        start: 'top center',
        end: '80% center',
        scrub: false,
        markers: false,
    }
});

t1.fromTo('.animate-section-4',
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
</script>

@endsection


