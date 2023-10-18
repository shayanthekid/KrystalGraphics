@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl hero-text">Stickers</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 hero-para">
 Revolutionize your sticker game with our cutting-edge printing services. At Kristal Graphics, we go beyond the ordinary to offer a range of distinctive sticker options, including holographic, silver, white BOPP, clear, and special die-cut shapes. Whether you're looking to add a touch of magic with holographic stickers or sleek elegance with silver, our precise printing technology brings your designs to life in exquisite detail. Stand out from the crowd and let your creativity shine with stickers that make a statement, whether for branding, events, or personal expression. Choose us to elevate your sticker experience, and let your imagination run wild with our premium printing solutions.            </p>
   

        </div>
    </div>
</div>



<x-product-carousel :title="'Products'" :products='json_encode([
  ["title" => "Holographic", "image" => "images/services/labels/label.png", "url" => "labels/stickers"],
  ["title" => "Silver ", "image" => "images/services/labels/label.png", "url" => "labels/stickers"],
  ["title" => "White Bopp", "image" => "images/services/labels/label.png", "url" => "labels/stickers"],
  ["title" => "Clear ", "image" => "images/services/labels/label.png", "url" => "labels/stickers"],
  ["title" => "Special Die Cut Shapes  ", "image" => "images/services/labels/label.png", "url" => "labels/stickers"],


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


