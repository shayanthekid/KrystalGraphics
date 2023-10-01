<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">{{ $title }}</h2>

        <!-- Carousel of Cards -->
        <div class="flex space-x-4 lg:space-x-20 overflow-x-scroll  scrollbar-red">
            @foreach(json_decode($products) as $product)
            <div class="w-60">
                <a href="{{ $product->url }}">
                    <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="w-36 h-36 object-contain object-center" />
                    </div>
                    <h3 class="text-xl font-semibold mt-4 pb-8">{{ $product->title }}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
 .scrollbar-red::-webkit-scrollbar {
    width: 6px  !important; /* Adjust the width to make it thinner */

}

.scrollbar-red::-webkit-scrollbar-thumb {
    background-color: #F5F5F5;
    border-radius: 10px;
 height: 2px;
}

/* .scrollbar-red::-webkit-scrollbar-track {
    background-color: rgba(0, 0, 0, 0.05);
} */

/* Push the scrollbar down */

</style>
