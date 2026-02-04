<section class="py-16 bg-[#181818]">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-white mb-2">Works Gallery</h2>
    <div class="w-20 h-1 bg-[#9c1428] mb-8"></div>

    <div class="w-full overflow-hidden h-[600px] md:h-[500px] sm:h-[400px]">
      <div class="flex flex-wrap md:flex-nowrap items-stretch h-full gap-2 sm:gap-3 md:gap-4">

        <!-- Column up-->

        <div class="flex-1 min-w-[45%] sm:min-w-[30%] md:min-w-0">
          <div class="scroll-column h-full overflow-hidden relative rounded-md">
            <div class="inner flex flex-col gap-4 animate-scroll-up">
              @foreach ($galleries->take(4) as $gallery)
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Tattoo 1"
                  class="w-full h-56 object-cover rounded">
              @endforeach
            </div>
          </div>
        </div>

        <!-- Column Down -->
        <div class="flex-1 min-w-[45%] sm:min-w-[30%] md:min-w-0">
          <div class="scroll-column h-full overflow-hidden relative rounded-md">
            <div class="inner flex flex-col gap-4 animate-scroll-down">
              @foreach ($galleries->skip(4)->take(4) as $gallery)
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Tattoo A"
                  class="w-full h-56 object-cover rounded">
              @endforeach
            </div>
          </div>
        </div>

        <!-- Column up-->
        <div class="flex-1 min-w-[45%] sm:min-w-[30%] md:min-w-0">
          <div class="scroll-column h-full overflow-hidden relative rounded-md">
            <div class="inner flex flex-col gap-4 animate-scroll-up">
              @foreach ($galleries->skip(8)->take(4) as $gallery)
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Tattoo A"
                  class="w-full h-56 object-cover rounded">
              @endforeach
            </div>
          </div>
        </div>
        <!-- Column Down -->
        <div class="flex-1 min-w-[45%] sm:min-w-[30%] md:min-w-0">
          <div class="scroll-column h-full overflow-hidden relative rounded-md">
            <div class="inner flex flex-col gap-4 animate-scroll-down">
              @foreach ($galleries->skip(12)->take(4) as $gallery)
              <img src="{{ asset('storage/' . $gallery->image) }}" alt="Tattoo A" class="w-full h-56 object-cover rounded">
              @endforeach
            </div>
          </div>
        </div>

        <!-- Column up-->
        <div class="flex-1 min-w-[45%] sm:min-w-[30%] md:min-w-0">
          <div class="scroll-column h-full overflow-hidden relative rounded-md">
            <div class="inner flex flex-col gap-4 animate-scroll-up">
              @foreach ($galleries->skip(16)->take(4) as $gallery)
              <img src="{{ asset('storage/' . $gallery->image) }}" alt="Tattoo A" class="w-full h-56 object-cover rounded">
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>