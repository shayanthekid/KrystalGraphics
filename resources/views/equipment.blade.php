@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
   <div class="bg-[#FCFCFC] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-black">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl hero-text" style="opacity: 0">Precision on Every print</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4 hero-para" style="opacity: 0">
            We use only the highest quality equipment, which is maintained at optimal service levels to complete and deliver your jobs. Our state-of-the-art technology and high-quality materials ensure that your printed materials look their best every time. 
              
            </p>
   

        </div>
    </div>
</div>


    
{{-- Tabs --}}

<div x-data="tabs()" class="mb-4 items">
    
    <div class="overflow-x-auto whitespace-nowrap  e scrollbar-red pb-2">
        <template x-for="(tab, index) in tabsData" :key="index">

            <button @click="activateTab(index)" 
            :class="{ 'bg-black text-white': activeTab === index, 'hover:bg-gray-200': activeTab !== index }" 
            class="px-4 py-2 rounded-lg text-black" 
            x-text="tab.title">

        </button>
       
    </template>
   
</div>
   
<div class="flex  overflow-x-scroll scrollbar-hide no-scrollbar ">
       
    <div class="flex">
           
        <div x-show="activeTab === 0" class="mt-4">
                <!-- Content for Screen Printing -->
   
                <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
        
       
       <ul class="list-disc list-inside">
    <li>10 Color Anatol Automatic</li>
    <li>12 Color Anatol Automatic</li>
    <li>4 Color Anatol Automatic</li>
    <li>6 Color Manual</li>
</ul>
        
    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>



</div>
           
</div>

            <div x-show="activeTab === 1" class="mt-4">
                <!-- Content for Digital Printing -->
                      <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li> Xerox Color Press 1000i</li>
    <li>Konica 6085 (Sheet Size 13x28)</li>
    <li>Konica 1085</li>
    <li>Xerox B/W</li>
</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel3" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 2" class="mt-4">
                <!-- Content for Digital Env -->
                   <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li> I-jet - Digital Envelopes sizes up to 9x12</li>
    
</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel2" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 3" class="mt-4">
                <!-- Content for Presses -->
                       <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li> 6 color Komori LS640 - 28 x 40</li>
    <li>Hamada 12 x 18</li>
    <li> AB Dick Mini Press </li>
    <li>Jeti Titan (122” x 79”) </li>



   


    
</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel4" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 4" class="mt-4">
                <!-- Content for UV Coasters -->
<div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li> 2 Sakurai Screen Coaters (28” x 40”)</li>
 
</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel5" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 5" class="mt-4">
                <!-- Content for Foil Stamping -->
            <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li>  Bobst BMA Automatic Foiler (28” x 40”)</li>
    <li>  Kluge (14” x 20”)</li>



</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel6" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 6" class="mt-4">
                <!-- Content for Die Cutters -->
          <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li>  Bobst 102SE (28” x 40”)</li>
    <li> Thompson (33” x 47”)</li>
    <li>Kluge (14” x 20”)</li>
    <li>Windmill</li>







</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel7" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 7" class="mt-4">
                <!-- Content for Gluers -->
                     <!-- Content for Die Cutters -->
          <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li> Bobst Domino 90</li>
    <li> Lyra Vega</li>
    <li>Hot Melt Glue available</li>










</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel8" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>

            <div x-show="activeTab === 8" class="mt-4">
                <!-- Content for Cutter -->
                     <!-- Content for Die Cutters -->
          <div class="container grid grid-cols-1 md:grid-cols-2 scrollbar-hide">
    <!-- First Column -->
    
    
    <div class="bg-[#FCFCFC] col-span-2 md:col-span-1 px-4 py-16 md:w-full">
       
      
       
          <ul class="list-disc list-inside">
    <li> ITO Guillotine (54”)</li>
  







</ul>
        
     



    
    </div>

    <!-- Second Column -->
    
    <div class="col-span-2 md:col-span-1 ">
       
        <div x-data="carousel9" class="relative bg-[#FCFCFC] w-full max-w-screen-lg mx-auto">
           
            <div class="relative overflow-hidden rounded-lg">
               
                <div x-ref="slider" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Images will be dynamically added here -->
                   
                    <template x-for="(image, index) in images" :key="index">
                        <div class="w-full h-96 flex-shrink-0">
                            <img :src="image" :alt="'Image ' + (index + 1)" class="object-contain object-center w-full h-full">
                        </div>
                   
                    </template>
                
                </div>
            
            </div>

            <!-- Navigation Buttons -->
          
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="prev()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &lt;
                </button>
            
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="next()" class="px-4 py-2 bg-gray-900 text-white hover:bg-gray-700 transform -translate-y-1/2 bg-black rounded-full w-8 h-8 flex items-center justify-center cursor-pointer z-5">
                    &gt;
                </button>
           
            </div>
        </div>
    </div>

</div>
            </div>
    
    </div>

<table cellpadding="0" cellspacing="0" style="margin:15px auto; padding:0;">
				<tbody><tr style="background-color:#000; color:#fff; font-weight:700;">
					<td>Type</td>
					<td>Name</td>
					<td>Sheet Size</td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td><b>Mailing Equipment</b></td>
					<td></td>
					<td></td>
				</tr>
				<tr style="background-color:#eee;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Inkjets</i></b></td>
					<td>Kirk-Rudy WaveJet</td>
					<td>14" x 26"</td>
				</tr>
				<tr style="background-color:#eee;">
					<td></td>
					<td>Kirk-Rudy NetJet [3]</td>
					<td>14" x 26"</td>
				</tr>
				<tr style="background-color:#eee;">
					<td></td>
					<td>MCS Array</td>
					<td>14" x 26"</td>
				</tr>
				<tr style="background-color:#eee;">
					<td></td>
					<td>MCS Eagle</td>
					<td>14" x 26"</td>
				</tr>
				<tr style="background-color:#eee;">
					<td></td>
					<td>Scitex</td>
					<td>14" x 26"</td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Inserters</i></b></td>
					<td>Bell and Howell Mailstar 500-C06</td>
					<td>6" x 9.5"</td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>Bell and Howell Mailstar 500-C04 [2]</td>
					<td>6" x 9.5"</td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>Bell and Howell Jumbo Inserter C04</td>
					<td>9" x 12"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td><b>Printers</b></td>
					<td></td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Offset</i></b></td>
					<td>Hamada 2-color [2]</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>2008 Komori 6-color UV Press</td>
					<td>28" x 40"</td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>AB Dick 2-color</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>RYOBI 3302-H 2-color</td>
					<td>12" x 18"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Digital</i></b></td>
					<td>Canon varioPrint 110 (black variable)</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Xerox iGen5</td>
					<td>14" x 26"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Xante Impressa (small-run digital printer)</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Xerox Color Press 1000!</td>
					<td>13"x 19"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Xerox 700</td>
					<td>13"x 19"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Konica 6085</td>
					<td>13"x 19"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Konica 1085</td>
					<td>13"x 30"</td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Wide/Large Format</i></b></td>
					<td>AGFA Jeti 3020 Titan</td>
					<td>122" x 79"</td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>HP 10ft Banner and Fabric</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>Mutoh 5ft Banner</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Envelope Printing</i></b></td>
					<td>iJet Digital Envelope Machine</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>AB Dick Envelope 2-color</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Screen Printing</i></b></td>
					<td>Anatol Automatic 12-color</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>Anatol Automatic 6-color</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>Manual 6-color</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td><b>Proofer</b></td>
					<td>Epson 44" Inkjet Printer – 9800</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>Epson 44" Inkjet Printer – 9890</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>HP 5500 60" Wide Inkjet</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>HP Office Jet K850</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td><b>Finishing</b></td>
					<td>MGI JETvarnish 3D Evo iFoil</td>
					<td>29" x 47"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Kluge [3]</td>
					<td>14" x 22"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Windmill [2]</td>
					<td>9" x 12"</td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Coater</i></b></td>
					<td>Sakurai UV Coater [2]</td>
					<td>28" x 40"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Die Cutter</i></b></td>
					<td>Thompson Clamshell Handfeeder</td>
					<td>28" x 40"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Bobst Die Cutter – Automatic 102SE</td>
					<td>28" x 40"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Bobst BMA Automatic Foiler Die Cutter</td>
					<td>28" x 40"</td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Gluer</i></b></td>
					<td>Bobst Gluer – Domino 90</td>
					<td></td>
				</tr>	
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>Vega Gluer – LYRA ZH 1020</td>
					<td></td>
				</tr>
				<tr style="background-color:#e0effe;">
					<td></td>
					<td>Hot Melt Glue Available</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Cutter</i></b></td>
					<td>ITO Guillotine Cutter</td>
					<td>54"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>Polar 78E Cutter</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td><b>Laminator</b></td>
					<td>DURApro Multi 540 Automatic with Cold Foil</td>
					<td>20" x 28"</td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td><b>Shrinkwrapper</b></td>
					<td>Belco Shrinkwrap Semi-Automatic</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td><b>Folder</b></td>
					<td>MBO T49 Folder</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>Rollem TR Fold/Score/Perforate/Glue</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td><b>Structural Design</b></td>
					<td>Kongsberg CAD</td>
					<td>119"x 65"</td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td><b>Computer-to-Plate</b></td>
					<td>Creo Lotem Thermal Platesetter</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>Fully Automated w/Squarespot Technology</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td></td>
					<td>Artworks Nexus Manager w/Power Layout &amp; Power Stepper</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td><b>Audible Media</b></td>
					<td>CD Rom</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>CD Writer</td>
					<td></td>
				</tr>
				<tr style="background-color:#ecf5ff;">
					<td></td>
					<td>FTP Site</td>
					<td></td>
				</tr>
				<tr style="background-color:#f7f7f7;">
					<td><b>Other</b></td>
					<td>LBX-2000 Plastic Strappers [5]</td>
					<td></td>
				</tr>
			</tbody></table>



</div>


<script>
    function tabs() {
        return {
            tabsData: [
                { title: 'Screen Printing' },
                { title: 'Digital Printing' },
                { title: 'Digital Env' },
                { title: 'Presses' },
                { title: 'UV Coaters' },
                { title: 'Foil Stamping' },
                { title: 'Die Cutters' },
                { title: 'Gluers' },
                { title: 'Cutter' },
            ],
            activeTab: 0,

            activateTab(tabIndex) {
                this.activeTab = tabIndex;
            },
        };
    }
</script>


<style>
    
 .scrollbar-red::-webkit-scrollbar {
    width: 6px  !important; /* Adjust the width to make it thinner */
    
}

.scrollbar-red::-webkit-scrollbar-thumb {
    background-color: #808080;
    border-radius: 10px;
    height: 1.5px;
}
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scrollbar {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
/* .scrollbar-red::-webkit-scrollbar-track {
    background-color: rgba(0, 0, 0, 0.05);
} */

/* Push the scrollbar down */
</style>


<script>
    function carousel() {
        return {
             images: [
           '{{ asset('images/equipment/screen/screen1.jpg') }}',
            '{{ asset('images/equipment/screen/screen2.jpg') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    //digital ENV
    function carousel2() {
        return {
             images: [
            '{{ asset('images/equipment/digital/digital.jpg') }}',
            '{{ asset('images/equipment/digital/digital3.jpg') }}',
            '{{ asset('images/equipment/digital/digital4.jpg') }}',
        
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    //digital printing
    function carousel3() {
        return {
             images: [
         '{{ asset('images/equipment/digital/digital2.jpg') }}',
            '{{ asset('images/equipment/digital/digital3.jpg') }}',
            '{{ asset('images/equipment/digital/digital4.jpg') }}',
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    //press
    function carousel4() {
        return {
             images: [
     '{{ asset('images/equipment/digital/digital4.jpg') }}',             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    function carousel5() {
        return {
             images: [
            '{{ asset('images/equipment/digital/digital.jpg') }}',
           '{{ asset('images/equipment/screen/screen2.jpg') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    function carousel6() {
        return {
             images: [
            '{{ asset('images/equipment/digital/digital.jpg') }}',
           '{{ asset('images/equipment/screen/screen2.jpg') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    function carousel7() {
        return {
             images: [
            '{{ asset('images/equipment/cutter/cutter.jpg') }}',
           '{{ asset('images/equipment/screen/screen2.jpg') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    function carousel8() {
        return {
             images: [
            '{{ asset('images/equipment/cutter/cutter.jpg') }}',
           '{{ asset('images/equipment/screen/screen2.jpg') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
</script>
<script>
    function carousel9() {
        return {
             images: [
            '{{ asset('images/equipment/cutter/cutter.jpg') }}',
           '{{ asset('images/equipment/screen/screen2.jpg') }}'
             ],
            currentIndex: 0,
            slider: null,

            init() {
                this.slider = this.$refs.slider;
              
            },


            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.slideToCurrentIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.slideToCurrentIndex();
            },

            slideToCurrentIndex() {
                const translateX = -this.currentIndex * 100;
                this.slider.style.transform = `translateX(${translateX}%)`;
            }
        };
    }
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