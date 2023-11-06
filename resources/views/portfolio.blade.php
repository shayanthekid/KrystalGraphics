@extends('layouts.app')

@section('content')

<style>
  main{
    background-color: #94A2CE;
  }
  .wrapper {
  align-items: center;
  display: flex;
  height: 90%;
  justify-content: center;
  margin: 5%;
  width: 90%;
}
.aspect {
  padding-bottom: 70%;
  position: relative;
  width: 100%;
}
.aspect-inner {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}


.flipbook {
  height: 100%;
  transition: margin-left 0.25s ease-out;
  width: 100%;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  
}
.flipbook .page {
  height: 100%;
  width: 100%;
}
.flipbook .page img {
  max-width: 100%;
  height: 100%;
}

.flipbook2 {
  height: 100%;
  transition: margin-left 0.25s ease-out;
  width: 100%;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  
}
.flipbook2 .page {
  height: 100%;
  width: 100%;
}
.flipbook2 .page img {
  max-width: 100%;
  height: 100%;
}

  .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
</style>

  <div class="bg-[#FCFCFC] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-black">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl hero-text" style="opacity: 0">Portfolio</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 hero-para" style="opacity: 0">
Check out our projects            
            </p>
   

        </div>
    </div>
</div>



    <div >
<div class="grid sm:grid-cols-1 md:grid-cols-2 gap-5 items-center">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full ">
            <div class="text-center lg:text-left text-white px-20">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-5xl lg:py-10 hero-text" style="opacity: 0;">
 Flip through the pages!
</h1>
                
            </div>
        </div>
  <div>
    <div class="wrapper no-scrollbar overflow-hidden">
      <div class="aspect no-scrollbar">
        <div class="aspect-inner no-scrollbar justify-center">
       
          <div class="flipbook no-scrollbar" id="flipbook">
    <!-- Static first image -->

    <!-- Dynamic images will be inserted here -->
</div>

        </div>
      </div>
    </div>
  </div>
</div>
    </div>





<!--there will be a invisble character here -->
ㅤ

<script>
    function loadPortfolioImages() {
        fetch('/products/equipment')
            .then(response => response.json())
            .then(data => {
                const flipbook = document.getElementById('flipbook');

                // Clear existing content in the flipbook
                flipbook.innerHTML = '';

                // Manually add the static first page
                const staticPageDiv = document.createElement('div');
                staticPageDiv.className = 'page';
                const staticImg = document.createElement('img');
                staticImg.src = "{{ asset('images/portfolio/KGPCover.png') }}"; // Update the path if necessary
                staticImg.draggable = false;
                staticImg.alt = '';
                staticPageDiv.appendChild(staticImg);
                flipbook.appendChild(staticPageDiv);

                // Append dynamic images
                data.forEach(item => {
                    item.images.forEach(imageData => {
                        const pageDiv = document.createElement('div');
                        pageDiv.className = 'page';

                        const img = document.createElement('img');
                        img.src = imageData.filename.replace('public', 'storage');
                        img.draggable = false;
                        img.alt = imageData.type;

                        pageDiv.appendChild(img);
                        flipbook.appendChild(pageDiv);
                    });
                });

                // Reinitialize flipbook
                $(flipbook).turn('destroy').turn({
                    autoCenter: true
                });
            })
            .catch(error => console.error('Error fetching portfolio images:', error));
    }

    loadPortfolioImages();
</script>

<script>

  var flipbookEL = document.getElementById('flipbook');
window.addEventListener('resize', function (e) {
  flipbookEL.style.width = '';
  flipbookEL.style.height = '';
  $(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight);
});
$(flipbookEL).turn({
    autoCenter: true
});


 

</script>



<script>


    const tl = gsap.timeline();
   tl.to(".hero-text", 1, {
    opacity: 1,
  y: 10,
  ease: "power4.inOut",
  stagger: {
    amount: 0.3
  }
})

const tl2 = gsap.timeline();
tl2.to(".hero-para", 1, {
    opacity: 1,
  y: 10,
  ease: "power4.inOut",
  stagger: {
    amount: 0.3
  }
})

</script>

@endsection