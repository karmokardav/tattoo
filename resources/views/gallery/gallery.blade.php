@extends('layouts.app')

@section('title', 'home')
@section('content')
    <main class="bg-[#393738]">
        @include('components.header.header')
        @include('components.gallery.gallery')
        @include('components.footer.footer')
    </main>
@endsection