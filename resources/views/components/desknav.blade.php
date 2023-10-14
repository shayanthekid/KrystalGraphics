<style>
.active-link {
    position: relative; /* Position relative for the parent */
}

.active-link::after {
    content: ""; /* Create an empty content box */
    display: block;
    height: 2px; /* Adjust the thickness of the underline */
    width: 100%; /* Make the line span the entire width of the link */
    background-color: #FFC414; /* Set the color to yellow */
    position: absolute; /* Position the underline absolutely */
    bottom: -4px; /* Add a margin-top by adjusting the negative bottom value */
    left: 0; /* Align the underline with the link */
}

.nonactive:after {
  display:block;
  content: '';
  border-bottom: solid 3px #FFC414;  
  transform: scaleX(0);  
  transition: transform 250ms ease-in-out;
  background-color: #FFC414;
}
.nonactive:hover:after { transform: scaleX(1); }

</style>

<nav class="bg-white py-4 px-8 flex flex-wrap justify-between items-center">
    <!-- Logo -->
    <div class="w-1/3">
        <img src="{{ asset('images/logos/logo2.png') }}" alt="Logo" class="w-24">
    </div>

    <!-- Main Navigation Links -->
  <ul class="flex w-1/3 justify-center space-x-6 font-montserrat font-medium">
    <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active-link' : 'nonactive' }} ">Home</a></li>
    <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active-link' : 'nonactive' }}">About us</a></li>
    <li><a href="{{ route('portfolio') }}" class="{{ Route::currentRouteName() === 'portfolio' ? 'active-link' : 'nonactive' }}">Portfolio</a></li>
    <li><a href="{{ route('equipment') }}" class="{{ Route::currentRouteName() === 'equipment' ? 'active-link' : 'nonactive' }}">Equipment</a></li>
</ul>

    <!-- Contact Links -->
    <div class="w-1/3 flex justify-end space-x-4 font-montserrat font-medium">
        <a href="{{ route('contact') }}">Contact Us</a>
        
    </div>

    <!-- Services Links -->
   <ul class="w-full flex justify-center space-x-6 font-montserrat font-light">
 
    <!-- Add more service links here -->
    <li>
        <a href="{{ route('silk-screen-printing') }}" class="{{ Route::currentRouteName() === 'silk-screen-printing' ? 'active-link' : 'nonactive' }}">
            Silk Screen Printing
        </a>
    </li>
    <li>
        <a href="{{ route('embroidery') }}" class="{{ Route::currentRouteName() === 'embroidery' ? 'active-link' : 'nonactive' }}">
            Embroidery
        </a>
    </li>
    <li>
        <a href="{{ route('packaging') }}" class="{{ Route::currentRouteName() === 'packaging' ? 'active-link' : 'nonactive' }}">
            Packaging
        </a>
    </li>
    <li>
        <a href="{{ route('mylar') }}" class="{{ Route::currentRouteName() === 'mylar' ? 'active-link' : 'nonactive' }}">
            Mylar Bags
        </a>
    </li>
    <li>
        <a href="{{ route('glass') }}" class="{{ Route::currentRouteName() === 'glass' ? 'active-link' : 'nonactive' }}">
            Glass Jars
        </a>
    </li>
    <li>
        <a href="{{ route('labels') }}" class="{{ Route::currentRouteName() === 'labels' ? 'active-link' : 'nonactive' }}">
            Labels/ Stickers
        </a>
    </li>
    <li>
        <a href="https://www.promoplace.com/33620/" class="{{ Route::currentRouteName() === 'promotional-items' ? 'active-link' : 'nonactive' }}">
            Promotional Items
        </a>
    </li>
    <li>
        <a href="https://bullseyeb2b.com/" class="{{ Route::currentRouteName() === 'mailing-services' ? 'active-link' : 'nonactive' }}">
            Mailing Services
        </a>
    </li>
    
   

    </li>
</ul>

   
   
</nav>
