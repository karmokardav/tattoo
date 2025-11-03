@extends('layouts.app')

@section('title', 'home')
@section('content')
    <main class="bg-[#393738]">
        @include('components.header.header')
        <section class="bg-[#393738] container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-white text-8xl font-bold"><span
                        class="inline-block text-[150px]">G</span>a<span
                        class="inline-block text-[200px] font-normal text-[#9c1428] animate-pulse">ll</span>ery</h1>
                <div class="w-50 h-1 bg-[#9c1428] mt-2 mb-16 mx-auto"></div>
            </div>
            <div class="grid grid-cols-5 gap-4 my-16">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
                <img src="{{ asset('images/tattoo1.jpg') }}"
                    class="w-full rounded-lg hover:scale-105 transition-transform duration-300 shadow-md border-2 border-white/40" alt="">
            </div>
        </section>
        @include('components.footer.footer')
    </main>
@endsection