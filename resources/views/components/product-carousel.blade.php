

<div class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-8 ml-2">{{ $title }}</h2>

        <!-- Carousel of Cards -->
        <div class="flex space-x-4 lg:space-x-20 overflow-x-auto no-scrollbarr">
            @foreach(json_decode($products) as $product)
            <div class="w-60">
            <a href="{{ $product->url }}"> <!-- Add the URL for the product page -->
                <div class="bg-gray-100 rounded-lg shadow-lg w-60 h-72 flex justify-center items-center">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="w-36 h-36 object-contain object-center" />
                </div>
                <h3 class="text-xl font-semibold mt-4">{{ $product->title }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</div>
