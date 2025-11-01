@extends('layouts.app')

@section('title', 'home')
@section('content')
  <main class="bg-[#181818]">
    @include('components.header.header')
    @include('components.hero.hero')
    @include('components.testimonial.own')
    @include('components.gallery.gallery')
    @include('components.blog.blog')
    @include('components.about.about')
    @include('components.footer.footer')
  </main>
@endsection