<div x-data="{ isOpen: false }">
    <!-- Mobile Navigation Bar (Row) -->
    <div class="fixed top-4 left-4 w-full">
        <!-- Hamburger Menu Icon (left-aligned) -->
        <button @click="isOpen = !isOpen" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
            </svg>
        </button>

        <!-- Logo (Centered) -->
        <div class="text-center">
            <img src="your-logo.png" alt="Your Logo" class="h-10 w-auto mx-auto" />
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="isOpen" class="fixed inset-y-0 left-0 bg-white w-1/2 h-full transform -translate-x-full ease-in-out transition-transform duration-300 shadow-lg">
        <!-- Close Icon -->
        <div class="absolute top-4 right-4">
            <button @click="isOpen = false" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M6.293 6.293l1.414 1.414L11 11.414l3.293-3.293 1.414-1.414L11 8.586l-3.293-3.293-1.414-1.414L11 5.586 7.707 2.293 6.293 3.707 9.586 7l-3.293 3.293z"/>
                </svg>
            </button>
        </div>

        <!-- Navigational Headers -->
        <div class="mt-10 mx-4">
            <h2 class="text-lg font-semibold">Home</h2>
            <h2 class="text-lg font-semibold mt-4">Contact Us</h2>
            <h2 class="text-lg font-semibold">ADDITIONAL WEBSITE</h2>
        </div>

        <!-- Navigational Menu (Services) -->
        <div class="mt-6 mx-4">
            <h3 class="text-lg font-semibold">Services</h3>
            <ul class="mt-2 space-y-2">
                <li>
                    <a href="#" class="text-blue-500">Silk Screen Printing</a>
                    <ul class="ml-4 mt-2 space-y-1">
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
