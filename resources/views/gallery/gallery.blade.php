@extends('layouts.app')

@section('title', 'Gallery')
@section('content')
    <main class="bg-[#0b0b0b] min-h-screen text-white antialiased">
        @include('components.header.header')
        <section class="relative overflow-hidden">
            <div class="container mx-auto px-6 py-16">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="font-extrabold text-white leading-tight">
                        <span class="inline-block align-top text-[90px] md:text-[120px] leading-none">G</span>
                        <span class="text-4xl md:text-6xl align-middle">allery</span>
                        <span class="inline-block text-4xl md:text-6xl text-[#9c1428] ml-2 animate-pulse">.</span>
                    </h1>

                    <p class="mt-4 text-sm md:text-base text-gray-300">
                        A curated selection of works. Click any image to open — navigation is CSS-only.
                    </p>
                </div>
            </div>
            <div class="mx-auto mb-8 w-28 h-0.5 bg-[#9c1428]"></div>
        </section>
        @include('components.footer.footer')
    </main>
@endsection