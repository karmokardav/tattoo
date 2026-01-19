@extends('layouts.app')

@section('title', 'about')
@section('content')
    <section>
        @include('components.header.header')
        <div class="bg-[#393738] text-white antialiased">
            <div class="flex items-center justify-center p-6">
                <div class="w-full max-w-6xl">
                    <header class="mb-6 text-center">
                        <h1 class="font-extrabold text-white leading-tight">
                            <span class="text-4xl md:text-6xl align-middle">About</span>
                            <span class="inline-block text-4xl md:text-6xl text-[#9c1428] ml-2 animate-pulse">.</span>
                        </h1>
                        <p class="text-sm text-white mt-2">welcome activate the first panel</p>
                    </header>
                    <div class="mx-auto mb-8 w-28 h-0.5 bg-[#9c1428]"></div>
                    @include('components.about.about')

                    <!-- <div id="carousel" class="flex gap-4 items-stretch"> -->
                        <!-- Panels inserted by JS for easy swapping of image URLs -->
                    <!-- </div>

                    <div class="mt-6 flex items-center justify-center gap-4">
                        <button id="prev" class="px-4 py-2 rounded bg-white/10 hover:bg-white/20">Prev</button>
                        <button id="next" class="px-4 py-2 rounded bg-white/10 hover:bg-white/20">Next</button>
                    </div> -->
                </div>
            </div>
        </div>
        @include('components.footer.footer')
    </section>
@endsection