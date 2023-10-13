  <div class="lg:hidden">
        <!-- This will be displayed on smaller screens (mobile view) -->
     <div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">{{ $title }}</h2>

        <!-- Carousel of Cards -->
        <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll  scrollbar-red">
            @foreach(json_decode($products) as $product)
            <div class="w-60">
                <a href="{{ $product->url }}">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="w-66 h-66 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">{{ $product->title }}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
    </div>
    <div class="hidden lg:block">
        <!-- This will be displayed on larger screens (not mobile view) -->
        
<div class="py-16 bg-white ">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">{{ $title }}</h2>

     
<div class="grid grid-cols-5 md:grid-cols-{{ $columns }} lg:grid-cols-{{ $columns }} justify-center gap-x-4 gap-y-8 animate-section">
            @foreach(json_decode($products) as $product)
            <div class="w-full flex items-center justify-center">
                <a href="{{ $product->url }}">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-44 h-48 flex justify-center items-center">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="w-full h-full object-cover rounded-lg" />
                    </div>
                    <h3 class="text-lg font-semibold mt-4 text-center">{{ $product->title }}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>




    </div>


<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
</style>

<style>
 .scrollbar-red::-webkit-scrollbar {
       display: none;
}

.scrollbar-red::-webkit-scrollbar-thumb {
     display: none;
}

/* .scrollbar-red::-webkit-scrollbar-track {
    background-color: rgba(0, 0, 0, 0.05);
} */

/* Push the scrollbar down */

</style>

<script>
    let defaultTransform = 0;

    function goNext() {
        defaultTransform = defaultTransform - 398;
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }

    const next = document.getElementById("next");
    next.addEventListener("click", goNext);

    function goPrev() {
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 398;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }

    const prev = document.getElementById("prev");
    prev.addEventListener("click", goPrev);
</script>
