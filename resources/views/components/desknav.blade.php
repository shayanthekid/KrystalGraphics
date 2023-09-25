<nav class="bg-white py-4 px-8 flex flex-wrap justify-between items-center">
    <!-- Logo -->
    <div class="w-1/3">
        <img src="{{ asset('images/logos/krystallogo.png') }}" alt="Logo" class="w-60">
    </div>

    <!-- Main Navigation Links -->
    <ul class="flex w-1/3 justify-center space-x-6 font-montserrat font-medium">
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Equipment</a></li>
    </ul>

    <!-- Contact Links -->
    <div class="w-1/3 flex justify-end space-x-4 font-montserrat font-medium">
        <a href="#">Contact Us</a>
        <a href="#">Additional Website</a>
    </div>

    <!-- Services Links -->
   <ul class="w-full flex justify-center space-x-6 font-montserrat font-light">
    <li>
      <div x-data="{ isOpen: false }" class="flex flex-col">
    <div class="flex items-center">
        <a  href="#" class="text-black cursor-pointer hover:text-blue-500 transition-colors">
            Silk Screen Printing
        </a>
        <svg @click="isOpen = !isOpen" x-bind:class="{ 'transform rotate-180': isOpen, 'transform rotate-0': !isOpen }"
             xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="ml-2">
            <path fill="none" d="M0 0h24v24H0z"/>
            <path d="M7 10l5 5 5-5z"/>
        </svg>
    </div>
    
    <!-- Sub-menu items -->
    <ul x-show="isOpen" class="ml-4 mt-8 space-y-2 absolute bg-white border border-gray-200 rounded-lg py-4 px-6 z-10 shadow-lg">
        <li><a href="#">T-Shirts</a></li>
        <li><a href="#">Hoodies</a></li>
        <li><a href="#">Safety Vests</a></li>
        <li><a href="#">Bandanas</a></li>
    </ul>
</div>

    </li>
    <!-- Add more service links here -->
    
           <li><a href="#">Promotional Items</a></li>
        <li><a href="#">Embroidery</a></li>
        <li><a href="#">Packaging</a></li>
        <li><a href="#">Mylar Bags</a></li>
        <li><a href="#">Glass Jars</a></li>
        <li><a href="#">Labels/ Stickers</a></li>
</ul>

   
   
</nav>
