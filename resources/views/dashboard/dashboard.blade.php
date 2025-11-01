@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <section class="bg-[#393738] font-sans">
        <!-- Sidebar -->
        <div class="flex h-screen">
            <aside class="w-64 bg-[#181818] text-white flex flex-col">
                <div class="px-9 py-7 text-2xl font-bold border-b border-[#939393]/40">
                    InkMaster
                </div>
                <nav class="flex-1 p-6 space-y-3">
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">Dashboard</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">Home</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">Gallery</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">Blog</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">About</a>
                    <a href="#" class="block py-2 px-3  hover:bg-[#9c1428]">Contact</a>
                </nav>
                <div class="p-6 border-t border-gray-700">
                    <button class="w-full py-2 px-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white border-t border-[#939393]/40">Logout</button>
                </div>
            </aside>

            <!-- Main content -->
            <div class="flex-1 flex flex-col">

                <!-- Navbar -->
                <header class="flex justify-between items-center bg-[#9c1428] border-b border-[#939393]/40 p-6">
                    <h1 class="text-2xl font-bold text-white">Dashboard</h1>
                    <div class="flex items-center gap-4">
                        <input type="text" placeholder="Search..." class="border  px-3 py-1 focus:outline-none" />
                        <div
                            class="w-10 h-10 -full bg-gray-300 flex items-center justify-center text-gray-700 font-bold">
                            a</div>
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