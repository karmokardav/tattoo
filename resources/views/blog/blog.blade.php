@extends('layouts.app')

@section('title', 'home')
@section('content')
    <main class="bg-[#393738]">
        @include('components.header.header')
        <main class=" px-2 md:px-6 pb-20">
            <!-- Row 1 (image-left, text-right) -->
            <section class="grid md:grid-cols-2 gap-12 items-center py-12 vertical-lines">
                <div class="relative">
                    <!-- main big image -->
                    <div class="rounded-md overflow-hidden">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt="Cover 1"
                            class="w-full h-[420px] object-cover block" />
                    </div>

                    <!-- small collage squares (absolute) -->
                    <div class="absolute left-0 -bottom-6 transform -translate-x-6 grid gap-3">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-20 h-20 object-cover collage-square rounded-sm" />
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-24 h-24 object-cover collage-square rounded-sm" />
                    </div>

                    <div class="absolute -right-6 -top-6">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-28 h-28 object-cover collage-square rounded-sm" />
                    </div>
                </div>

                <div class="text-right md:pr-6">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">A lost soul of an old
                        warrior
                    </h2>
                    <p class="text-white mt-4 leading-relaxed">
                        Prais gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum.
                    </p>
                    <a href="#"
                        class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">VIEW
                        PROJECT</a>
                </div>
            </section>
            <!-- Row 2 (text-left, image-right) -->
            <section class="grid md:grid-cols-2 gap-12 items-center py-12 vertical-lines">
                <div class="order-2 md:order-1 md:pl-6 text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">The freedom we strive for</h2>
                    <p class="text-white mt-4 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed odio sit amet nibh
                        vulputate cursus a sit amet mauris.
                    </p>
                    <a href="#"
                        class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">VIEW
                        PROJECT</a>
                </div>

                <div class="order-1 md:order-2 relative">
                    <div class="rounded-md overflow-hidden">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt="Cover 2"
                            class="w-full h-[420px] object-cover block" />
                    </div>

                    <div class="absolute -left-6 -top-6 grid gap-3">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-24 h-24 object-cover collage-square rounded-sm" />
                    </div>
                    <div class="absolute -right-6 -bottom-6">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-20 h-20 object-cover collage-square rounded-sm" />
                    </div>
                </div>
            </section>
            <!-- Row 1 (text-left, image-right) -->
            <section class="grid md:grid-cols-2 gap-12 items-center py-12 vertical-lines">
                <div class="relative">
                    <!-- main big image -->
                    <div class="rounded-md overflow-hidden">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt="Cover 1"
                            class="w-full h-[420px] object-cover block" />
                    </div>

                    <!-- small collage squares (absolute) -->
                    <div class="absolute left-0 -bottom-6 transform -translate-x-6 grid gap-3">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-20 h-20 object-cover collage-square rounded-sm" />
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-24 h-24 object-cover collage-square rounded-sm" />
                    </div>

                    <div class="absolute -right-6 -top-6">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-28 h-28 object-cover collage-square rounded-sm" />
                    </div>
                </div>

                <div class="text-right md:pr-6">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">A lost soul of an old
                        warrior
                    </h2>
                    <p class="text-white mt-4 leading-relaxed">
                        Prais gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum.
                    </p>
                    <a href="#"
                        class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">VIEW
                        PROJECT</a>
                </div>
            </section>
            <!-- Row 2 (text-left, image-right) -->
            <section class="grid md:grid-cols-2 gap-12 items-center py-12 vertical-lines">
                <div class="order-2 md:order-1 md:pl-6 text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">The freedom we strive for</h2>
                    <p class="text-white mt-4 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed odio sit amet nibh
                        vulputate cursus a sit amet mauris.
                    </p>
                    <a href="#"
                        class="inline-block mt-6 px-5 py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">VIEW
                        PROJECT</a>
                </div>

                <div class="order-1 md:order-2 relative">
                    <div class="rounded-md overflow-hidden">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt="Cover 2"
                            class="w-full h-[420px] object-cover block" />
                    </div>

                    <div class="absolute -left-6 -top-6 grid gap-3">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-24 h-24 object-cover collage-square rounded-sm" />
                    </div>
                    <div class="absolute -right-6 -bottom-6">
                        <img src="{{ asset('images/tattoo1.jpg') }}" alt=""
                            class="w-20 h-20 object-cover collage-square rounded-sm" />
                    </div>
                </div>
            </section>
        </main>
        @include('components.footer.footer')
    </main>
@endsection