<section class="flex flex-col md:flex-row items-center justify-between min-h-screen bg-black">
   
   <!-- LEFT CONTENT -->
   <div class="md:w-1/2 w-full flex flex-col justify-center items-start px-6 md:px-10 py-16">
      
      <h1 class="text-5xl md:text-8xl font-bold tracking-wide leading-tight text-white mb-4">
         SHUVO'S TATTOO
      </h1>

      <p class="text-gray-300 text-sm md:text-base max-w-md">
         Unique, meaningful, and timeless tattoos designed with passion and precision.
         Express your story through art that lives on your skin.
      </p>

      <div class="flex mt-12 space-x-4 items-start">
         
         <!-- vertical bar -->
         <div class="w-1 md:w-2 h-24 md:h-36 bg-[#9c1428]"></div>

         <div>
            <!-- Social Icons -->
            <div class="flex space-x-4">
               <a href="#"><i class="fa-brands fa-whatsapp text-white text-lg"></i></a>
               <a href="#"><i class="fa-brands fa-instagram text-white text-lg"></i></a>
               <a href="#"><i class="fa-brands fa-facebook text-white text-lg"></i></a>
               <a href="#"><i class="fa-brands fa-twitter text-white text-lg"></i></a>
               <a href="#"><i class="fa-brands fa-youtube text-white text-lg"></i></a>
            </div>

            <p class="text-gray-300 text-sm mt-6 max-w-md">
               SHUVO'S TATTOO is a tattoo studio that is home to unique, meaningful, and timeless tattoos designed with passion and precision.
            </p>

            <!-- Buttons -->
            <div class="flex space-x-3 pt-6">
               <a href="/book"
                  class="bg-[#9c1428] hover:bg-[#7d7d7d] text-white px-5 py-2 rounded-lg font-semibold">
                  View My Work
               </a>
               <a href="/book"
                  class="bg-[#9c1428] hover:bg-[#7d7d7d] text-white px-5 py-2 rounded-lg font-semibold">
                  Book Now
               </a>
            </div>
         </div>
      </div>
   </div>

   <!-- RIGHT IMAGE -->
   <div class="md:w-1/2 w-full h-[50vh] md:h-[80vh]">
      <img 
         src="{{ asset('images/hero.png') }}" 
         alt="Hero Image"
         class="w-full h-full object-cover"
      >
   </div>

</section>
