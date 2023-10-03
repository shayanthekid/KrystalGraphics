<nav class="bg-white py-4 px-8 flex flex-wrap justify-between items-center">
    <!-- Logo -->
    <div class="w-1/3">
        <img src="{{ asset('images/logos/logo2.png') }}" alt="Logo" class="w-24">
    </div>

    <!-- Main Navigation Links -->
    <ul class="flex w-1/3 justify-center space-x-6 font-montserrat font-medium">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About us</a></li>  
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('equipment') }}">Equipment</a></li>
    </ul>

    <!-- Contact Links -->
    <div class="w-1/3 flex justify-end space-x-4 font-montserrat font-medium">
        <a href="{{ route('contact') }}">Contact Us</a>
        
    </div>

    <!-- Services Links -->
   <ul class="w-full flex justify-center space-x-6 font-montserrat font-light">
 
    <!-- Add more service links here -->
        <li><a href="{{ route('silk-screen-printing') }}">Silk Screen Printing</a></li>
        <li><a href="{{ route('embroidery') }}">Embroidery</a></li>
        <li><a href="{{ route('packaging') }}">Packaging</a></li>          
        <li><a href="{{ route('mylar') }}">Mylar Bags</a></li>
        <li><a href="{{ route('glass') }}">Glass Jars</a></li>
         <li><a href="{{ route('labels') }}">Labels/ Stickers</a></li>
        <li><a href="https://www.promoplace.com/33620/ ">Promotional Items</a></li>
        <a href="https://bullseyeb2b.com/">Mailing Services</a>
        
        <li>
    
   

    </li>
</ul>

   
   
</nav>
