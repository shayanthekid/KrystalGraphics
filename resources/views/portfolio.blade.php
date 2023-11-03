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
Flip through some of our work! (Copy NA)              
            </p>
   

        </div>
    </div>
</div>


<div class="lg:hidden">
        <div class="wrapper no-scrollbar overflow-hidden">
      <div class="aspect no-scrollbar">
        <div class="aspect-inner no-scrollbar justify-center">
          <div class="flipbook2 no-scrollbar" id="flipbook2">
            <div class="page"><img src="{{ asset('images/portfolio/KGPCover.png') }}" draggable="false" alt="" /></div>
            <div class="page "><img src="{{ asset('images/portfolio/1.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/2.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/3.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/4.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/5.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/7.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/8.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/12.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/13.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/16.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/18.jpg') }}" draggable="false" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="hidden lg:block">
     <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: center;">
        <div class="container mx-auto flex justify-center lg:justify-start items-center h-full">
            <div class="text-center lg:text-left text-white px-20">
                <h1 class="text-4xl font-semibold font-montserrat lg:text-5xl lg:py-10 hero-text" style="opacity: 0;">
 Flip through the pages!
</h1>
                <p class="mt-4 font-montserrat text-lg font-light lg:text-lg p-4 lg:p-0 hero-para " style="opacity: 0">
Copy (NA)                </p>
                <a href="{{ route('contact') }}" class="mt-14 inline-block px-6 py-3 text-black bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 lg:text-left font-roboto hero-button" style="opacity: 0">Contact Us</a>
            </div>
        </div>
  <div>
    <div class="wrapper no-scrollbar overflow-hidden">
      <div class="aspect no-scrollbar">
        <div class="aspect-inner no-scrollbar justify-center">
          <div class="flipbook no-scrollbar" id="flipbook">
            <div class="page"><img src="{{ asset('images/portfolio/KGPCover.png') }}" draggable="false" alt="" /></div>
            <div class="page "><img src="{{ asset('images/portfolio/1.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/2.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/3.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/4.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/5.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/7.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/8.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/12.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/13.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/16.jpg') }}" draggable="false" alt="" /></div>
            <div class="page"><img src="{{ asset('images/portfolio/18.jpg') }}" draggable="false" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>





{{-- 

    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/4.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/5.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/6.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/7.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/8.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/9.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/10.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/11.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/12.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/13.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/14.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/15.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/16.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/17.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/18.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/19.jpg') }}"
      alt=""
    />
    <img
      class="h-auto max-w-full rounded-lg"
      src="{{ asset('images/portfolio/20.jpg') }}"
      alt=""
    />
  </div>
    </div>
  </div>
</div> --}}
<!-- component -->

<!--there will be a invisble character here -->
ㅤ


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


 var flipbookEL2 = document.getElementById('flipbook2');
window.addEventListener('resize', function (e) {
  flipbookEL2.style.width = '';
  flipbookEL2.style.height = '';
  $(flipbookEL2).turn('size', flipbookEL2.clientWidth, flipbookEL2.clientHeight);
});
$(flipbookEL2).turn({
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