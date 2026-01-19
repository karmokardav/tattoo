@extends('layouts.app')

@section('title', 'home')
@section('content')
    <section class="bg-[#393738]">
        @include('components.header.header')
        <div class="px-4 sm:px-6 lg:px-10 xl:px-16 py-10">

    <!-- SECTION 1 (Image Left, Text Right) -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-14 items-center py-12 lg:py-20 vertical-lines">

        <!-- Image -->
        <div class="relative">
            <div class="rounded-md overflow-hidden">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class=" w-full h-[260px] sm:h-[340px] lg:h-[420px] object-cover">
            </div>

            <div class="absolute left-6 -bottom-4 sm:-bottom-6 -translate-x-4 sm:-translate-x-6 grid gap-2 sm:gap-3">
                <img src="{{ asset('images/tattoo1.jpg') }}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-sm">
                <img src="{{ asset('images/tattoo1.jpg') }}" class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-sm">
            </div>

            <div class="absolute -right-2 sm:-right-6 -top-4 sm:-top-6">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-20 h-20 sm:w-28 sm:h-28 object-cover rounded-sm">
            </div>
        </div>

        <!-- Text -->
        <div class="text-center md:text-right md:pr-6 lg:pr-10">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white">
                A lost soul of an old warrior
            </h2>

            <p class="text-white mt-4 text-sm sm:text-base leading-relaxed">
                Prais gravida nibh vel velit auctor aliquet. Aenean sollicitudin.
            </p>

            <a href="#"
               class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">
                VIEW PROJECT
            </a>
        </div>
    </section>

    <!-- SECTION 2 (Text Left, Image Right) -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-14 items-center py-12 lg:py-20 vertical-lines">

        <!-- Text -->
        <div class="order-2 md:order-1 text-center md:text-left md:pl-6 lg:pl-10">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white">
                The freedom we strive for
            </h2>

            <p class="text-white mt-4 text-sm sm:text-base leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>

            <a href="#"
               class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">
                VIEW PROJECT
            </a>
        </div>

        <!-- Image -->
        <div class="order-1 md:order-2 relative">
            <div class="rounded-md overflow-hidden">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-full h-[260px] sm:h-[340px] lg:h-[420px] object-cover">
            </div>

            <div class="absolute -left-2 sm:-left-6 -top-4 sm:-top-6">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-sm">
            </div>

            <div class="absolute -right-2 sm:-right-6 -bottom-4 sm:-bottom-6">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-sm">
            </div>
        </div>
    </section>
    <!-- SECTION 3 (Image Left, Text Right) -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-14 items-center py-12 lg:py-20 vertical-lines">

        <!-- Image -->
        <div class="relative">
            <div class="rounded-md overflow-hidden">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class=" w-full h-[260px] sm:h-[340px] lg:h-[420px] object-cover">
            </div>

            <div class="absolute left-6 -bottom-4 sm:-bottom-6 -translate-x-4 sm:-translate-x-6 grid gap-2 sm:gap-3">
                <img src="{{ asset('images/tattoo1.jpg') }}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-sm">
                <img src="{{ asset('images/tattoo1.jpg') }}" class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-sm">
            </div>

            <div class="absolute -right-2 sm:-right-6 -top-4 sm:-top-6">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-20 h-20 sm:w-28 sm:h-28 object-cover rounded-sm">
            </div>
        </div>

        <!-- Text -->
        <div class="text-center md:text-right md:pr-6 lg:pr-10">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white">
                A lost soul of an old warrior
            </h2>

            <p class="text-white mt-4 text-sm sm:text-base leading-relaxed">
                Prais gravida nibh vel velit auctor aliquet. Aenean sollicitudin.
            </p>

            <a href="#"
               class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">
                VIEW PROJECT
            </a>
        </div>
    </section>

    <!-- SECTION 4 (Text Left, Image Right) -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-14 items-center py-12 lg:py-20 vertical-lines">

        <!-- Text -->
        <div class="order-2 md:order-1 text-center md:text-left md:pl-6 lg:pl-10">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white">
                The freedom we strive for
            </h2>

            <p class="text-white mt-4 text-sm sm:text-base leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>

            <a href="#"
               class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">
                VIEW PROJECT
            </a>
        </div>

        <!-- Image -->
        <div class="order-1 md:order-2 relative">
            <div class="rounded-md overflow-hidden">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-full h-[260px] sm:h-[340px] lg:h-[420px] object-cover">
            </div>

            <div class="absolute -left-2 sm:-left-6 -top-4 sm:-top-6">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-sm">
            </div>

            <div class="absolute -right-2 sm:-right-6 -bottom-4 sm:-bottom-6">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                     class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-sm">
            </div>
        </div>
    </section>

</div>

        @include('components.footer.footer')
    </section>
@endsection