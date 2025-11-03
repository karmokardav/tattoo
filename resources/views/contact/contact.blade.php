@extends('layouts.app')

@section('title', 'home')
@section('content')
    <main class="bg-[#393738]">
        @include('components.header.header')
        <section class=" container mx-auto px-4">
            <div class="flex items-center py-6">
                <img src="{{ asset('images/machine.png') }}" class="w-1/2 object-cover">
                <div class="w-1/2">
                    <div class="flex justify-between items-end">
                        <h1 class="text-6xl font-bold text-white">Contact</h1>
                        <a href="/book"
                            class="bg-[#9c1428] hover:bg-[#7d7d7d] text-white px-4 py-2 rounded-lg font-semibold md:block">Book Now</a>
                    </div>
                    <div class="w-full h-1 bg-[#9c1428] mt-2 mb-16"></div>
                    <div>
                        <p class="text-gray-300 text-sm mt-4">Get in touch with me for any inquiries or bookings.</p>
                        <ul class="list-disc pl-6">
                            <li class="text-white">Email: <a href="oishe452@gmail.com"
                                    class="hover:text-[#9c1428]">oishe452@gmail.com</a></li>
                            <li class="text-white">Phone: <a href="+8801797703787" class="hover:text-[#9c1428]">+8801797703787</a></li>
                            <li class="text-white">Address: jashore, khulna, Bangladesh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @include('components.footer.footer')
    </main>
@endsection