@extends('layouts.app')

@section('title', 'home')
@section('content')
  <main class="bg-[#181818]">
    @include('components.header.header')
    @include('components.hero.hero')
    @include('components.testimonial.own')
    @include('components.blog.blog')
    @include('components.gallery.gallery')
  </main>



  <!-- <section class="relative h-1020px  flex items-center justify-center text-center">

            <img
              src="https://plus.unsplash.com/premium_photo-1760583232675-44b82dcfc19f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1332"
              alt="Background" class="absolute inset-0 w-full h-full object-cover">

            <div class="relative z-10 px-5">
              <p class="uppercase tracking-wide text-orange-400 mb-3">Available for freelance</p>
              <h2 class="text-2xl md:text-4xl font-semibold mb-4">
                Brand & UI/UX Designer based in London
              </h2>
              <p class="text-gray-300 max-w-lg mx-auto mb-8">
                Hi! I’m Dominic Walker — a UI/UX and brand designer passionate about
                modern web design and digital experiences that connect and inspire.
              </p>
              <h1 class="text-[70px] md:text-[120px] font-extrabold text-white mb-8 leading-none">
                Dominic
              </h1>
              <button class="bg-orange-500 text-black font-semibold px-8 py-3 rounded-full hover:bg-orange-400 transition">
                See my works
              </button>
            </div>
          </section>
          <section>
            <div>
              <h1 class="text-2xl">hridoy</h1>
            </div>
          </section> -->
@endsection