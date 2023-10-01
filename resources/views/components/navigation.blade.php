<div x-data="{ isOpen: false }" class="z-[100]" style="z-index: 999999">
    <!-- Mobile Navigation Bar (Row) -->
    <div class=" top-4 left-4 w-full h-auto z-[100] ">
        <!-- Hamburger Menu Icon (left-aligned) -->
        <button @click="isOpen = !isOpen" class="text-white p-4 z-[100]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
            </svg>
        </button>

        <!-- Logo (Centered) -->
        <div class="text-centerz-[100]">
<img src="{{ asset('images/logos/krystallogo.png') }}" alt="Your Logo" class="h-16 w-auto mx-auto -mt-10 z-[100]"  />
        </div>
    </div>

    <!-- Overlay Background -->
    <div x-show="isOpen" @click="isOpen = !isOpen" class="fixed inset-0 bg-gray-700 opacity-0 transition-opacity duration-300 pointer-events-none z-40"></div>

    <!-- Mobile Navigation Drawer -->
    <div :class="{'translate-x-0': isOpen, '-translate-x-full': !isOpen} "
         class="fixed inset-y-0 left-0 bg-white w-1/2 h-full transform ease-in-out transition-transform duration-300 shadow-lg z-[100]">
        <!-- Close Icon -->
        <div class="absolute top-4 right-4">
            <button @click="isOpen = false" class="text-black">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z"></path><path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z"></path></svg>
            </button>
        </div>

        <!-- Navigational Headers -->
        <div class="mt-10 mx-4">
            <h2 class="text-lg font-semibold"><a href="{{ route('home') }}">Home </a></h2>
            <h2 class="text-lg font-semibold ">Contact Us</h2>
            <h2 class="text-lg font-semibold">ADDITIONAL WEBSITE</h2>
        </div>

        <hr class="mt-4 h-0.5 bg-gray-300">
        <!-- Navigational Menu (Services) -->
        <div class="mt-6 mx-4">
            <h3 class="text-lg font-semibold">Services</h3>
            <ul class="mt-2 space-y-2">
                <li x-data="{ isOpen: false }">
                    <!-- Header of the accordion -->
                    <div class="flex items-center">
                        <a @click="isOpen = !isOpen" href="{{ route('silk-screen-printing') }}" class="text-blue-500 cursor-pointer">
                            Silk Screen Printing
                        </a>
                        <svg x-bind:class="{ 'transform rotate-180': isOpen, 'transform rotate-0': !isOpen }"
                             xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="ml-2">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M7 10l5 5 5-5z"/>
                        </svg>
                    </div>

                    <!-- Sub-menu items -->
                    <ul x-show="isOpen" class="ml-4 mt-2 space-y-1">
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Hoodies</a></li>
                        <li><a href="#">Safety Vests</a></li>
                        <li><a href="#">Bandanas</a></li>
                    </ul>
                </li>
                <li><a href="#" class="text-blue-500">Promotional Items</a></li>
                <li><a href="#" class="text-blue-500">Embroidery</a></li>
                <li><a href="#" class="text-blue-500">Packaging</a></li>
                <li><a href="#" class="text-blue-500">Mylar Bags</a></li>
                <li><a href="#" class="text-blue-500">Glass Jars</a></li>
                <li><a href="#" class="text-blue-500">Labels/ Stickers</a></li>
            </ul>
        </div>
    </div>
</div>
