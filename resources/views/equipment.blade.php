@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
   <div class="bg-[#FCFCFC] py-16">
    <div class="container mx-auto flex justify-center items-center h-full">
        <div class="text-center text-black">
            <h1 class="text-4xl font-semibold font-montserrat lg:text-6xl">Precision on Every print</h1>
            <p class="mt-4 font-montserrat text-lg font-light lg:text-xl p-4">
            We use only the highest quality equipment, which is maintained at optimal service levels to complete and deliver your jobs. Our state-of-the-art technology and high-quality materials ensure that your printed materials look their best every time. 
              
            </p>
   

        </div>
    </div>
</div>


    
{{-- Tabs --}}

<div x-data="tabs()" class="mb-4">
    
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
    <li>  Xerox® Iridesse®</li>
    <li> Komori LS640</li>
    <li> Jeti Titan (122” x 79”)</li>

   


    
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
</div>


<script>
    function tabs() {
        return {
            tabsData: [
                { title: 'Screen Printing' },
                { title: 'Digital Printing' },
                { title: 'Digital Env' },
                { title: 'Presses' },
                { title: 'UV Coasters' },
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
    function carousel2() {
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
    function carousel3() {
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
    function carousel4() {
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
@endsection