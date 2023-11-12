@extends('layouts.app')

@section('content')

@php
use App\View\Components\ProductCarousel;
@endphp
    <!-- Your Silk Screen Printing content goes here -->
<div class="bg-[#ED1F24] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl hero-text">Mylar Bags</h1>
           
     <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 hero-para">
Mylar bags, crafted from a durable polyester film, offer exceptional protection against moisture and oxygen. These versatile bags are ideal for extending product shelf life, preserving freshness, and showcasing your brand with custom printing. From food to electronics, Mylar bags are a reliable and customizable solution for various needs.            </p>

        </div>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8 ml-2 text-center">Products</h2>

        <div class="grid sm:grid-cols-1 md:grid-cols-4 justify-center gap-x-4 gap-y-8 animate-section-4" id="product-carousel">
            <!-- JavaScript will populate products here -->
        </div>
    </div>
</div>
<!-- Products -->
{{-- <x-product-carousel :title="'Products'" :products='json_encode([
    ["title" => "Custom Size", "image" => "images/services/mylar/weed3-min.jpg", "url" => "mylar/custom"],
    ["title" => "Standard Size", "image" => "images/services/mylar/weed-min.png", "url" => "mylar/standard"],
  

])' :columns="2"/> --}}



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
        trigger: '.animate-section-2',
        start: 'top center',
        end: '80% center',
        scrub: false,
        markers: false,
    }
});

t1.fromTo('.animate-section-2',
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


<script>
    // Make an AJAX request to your route
    fetch('/admin/products/getproductscat/4') // Replace {subcategoryId} with the actual subcategory ID
        .then(response => response.json())
        .then(data => {
            const productCarousel = document.getElementById('product-carousel');

            // Loop through each product in your data
            data.forEach(product => {
                // Initialize image URL
                let imageURL;

                // Find the first image with a non-empty coversrc, if any
                const coverImage = product.images.find(img => img.coversrc);
                if (coverImage) {
                    imageURL = coverImage.coversrc.replace('public/', 'storage/');
                } else {
                    // Fallback to the first image if no coversrc is found
                    imageURL = product.images[0].filename.replace('public/', 'storage/');
                }

                // Create a new product card
                const productCard = document.createElement('div');
                productCard.className = 'w-full flex items-center justify-center';

                // Create a link for the product
                const productLink = document.createElement('a');
                productLink.href = `/products/${product.id}`; // Use product.id

                // Create the product image
                const productImage = document.createElement('div');
                productImage.className = 'bg-gray-100 rounded-lg shadow-lg w-44 h-48 flex justify-center items-center';
                const img = document.createElement('img');
                img.src = imageURL; // Use coversrc or the first image filename
                img.alt = product.title;
                img.className = 'w-full h-full object-cover rounded-lg';
                productImage.appendChild(img);

                // Create the product title
                const productTitle = document.createElement('h3');
                productTitle.className = 'text-lg font-semibold mt-4 text-center';
                productTitle.textContent = product.title;

                // Append all elements to the product card
                productLink.appendChild(productImage);
                productLink.appendChild(productTitle);
                productCard.appendChild(productLink);

                // Append the product card to the product carousel
                productCarousel.appendChild(productCard);
            });
        })
        .catch(error => {
            console.error('Error fetching products: ', error);
        });
</script>

@endsection


