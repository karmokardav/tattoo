@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <section class="bg-[#393738] font-sans">
        <!-- Sidebar -->
        <div class="flex h-screen">
            <aside class="w-64 bg-[#181818] text-white flex flex-col  hidden md:block">
                <div class="px-9 py-7 text-2xl font-bold border-b border-[#939393]/40">
                    InkMaster
                </div>
                <nav class="flex-1 p-6 space-y-3">
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">
                        <i class="fa-solid fa-bars mr-2 text-white"></i> Dashboard
                    </a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]"><i
                            class="fa-solid fa-house mr-2 text-white"></i> Home</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">
                        <i class="fa-regular fa-image mr-2 text-white"></i> Gallery
                    </a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">
                        <i class="fa-solid fa-blog mr-2 text-white"></i> Blog
                    </a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]"><i
                            class="fa-solid fa-info-circle mr-2 text-white"></i> About</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]"><i
                            class="fa-regular fa-envelope mr-2 text-white"></i> Contact</a>
                </nav>
                <div class="p-6 border-t border-gray-700 mt-24">
                    <button
                        class="w-full py-2 px-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white border-t border-[#939393]/40">Logout</button>
                </div>
            </aside>
            <div class="flex-1 flex flex-col">
                <header class="flex justify-between items-center bg-[#9c1428] border-b border-[#939393]/40 p-6">
                    <h1 class="text-2xl font-bold text-white"><i class="fa-solid fa-bars mr-2"></i>Dashboard</h1>
                    <div class="flex items-center gap-4">
                        <a href=""><i class="fa-regular fa-bell text-white"></i></i></a>
                        <a href=""><i class="fa-regular fa-message text-white"></i></i></a>
                        <a href="">
                            <div class="flex gap-2 items-center">
                                <h1 class="text-white">Shuvo</h1>
                                <img src="{{ asset('images/tattoo1.jpg') }}" alt="" class="w-10 h-10 rounded-full">
                            </div>
                        </a>
                    </div>
                </header>

                <!-- Stats Cards -->
                <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 -lg shadow flex flex-col">
                        <h2 class="text-gray-500 text-sm">Total Artists</h2>
                        <p class="text-2xl font-bold mt-2">25</p>
                    </div>
                    <div class="bg-white p-6 -lg shadow flex flex-col">
                        <h2 class="text-gray-500 text-sm">Appointments Today</h2>
                        <p class="text-2xl font-bold mt-2">12</p>
                    </div>
                    <div class="bg-white p-6 -lg shadow flex flex-col">
                        <h2 class="text-gray-500 text-sm">Gallery Images</h2>
                        <p class="text-2xl font-bold mt-2">120</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection