@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <section class="bg-[#393738] font-sans h-screen overflow-hidden">
        <div class="flex h-full">

            <!-- Sidebar -->
            @include('admin.components.sidebar.sidebar')

            <!-- Main Content -->
            <div class="flex-1 flex flex-col  bg-[#393738]">
                <!-- Top Bar -->
                @include('admin.header')

                <div id="main-content">
                    <section class=" p-6 page-gallery overflow-y-auto h-screen scrollbar-hide">
                        <div class=" bg-[#2F2F2F] rounded-2xl mb-16  p-3 md:p-6 overflow-x-auto">
                            <div class="flex items-center justify-between mb-2">
                                <h1 class="text-2xl font-bold mb-4 text-white">Gallery</h1>
                                <a href="" id="addGalleryBtn"
                                    class="px-4 py-2 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded text-sm">
                                    Add Gallery
                                </a>
                            </div>
                            <table class="w-full border-separate border-spacing-y-1 md:border-spacing-y-1">
                                <thead>
                                    <tr class="text-gray-400 text-[10px] md:text-sm text-left">
                                        <th class="px-2 md:px-4 py-1 md:py-2">Image</th>
                                        <th class="px-2 md:px-4 py-1 md:py-2">Title</th>
                                        <th class="px-2 md:px-4 py-1 md:py-2">views</th>
                                        <th class="px-2 md:px-4 py-1 md:py-2">Like</th>
                                        <th class="px-2 md:px-4 py-1 md:py-2">Status</th>
                                        <th class="px-2 md:px-4 py-1 md:py-2 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-[11px] md:text-sm ">
                                    @forelse($galleries as $gallery)
                                                                <tr class="bg-[#3A3A3A] hover:bg-[#444] transition">
                                                                    <!-- Image -->
                                                                    <td class="px-2 md:px-4 py-1 md:py-2 rounded-l-xl">
                                                                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="image"
                                                                            class="w-8 h-8 md:w-12 md:h-12 object-cover  rounded-full">
                                                                    </td>

                                                                    <!-- Title -->
                                                                    <td class="px-2 md:px-4 py-1 md:py-2 text-white">{{ $gallery->title }}</td>

                                                                    <!-- Views -->
                                                                    <td class="px-2 md:px-4 py-1 md:py-2"><span
                                                                            class="bg-yellow-500/20 text-yellow-400 text-xs inline-flex items-center rounded-md px-2 py-1 text-sm">{{ $gallery->views }}</span>
                                                                    </td>

                                                                    <!-- Likes -->
                                                                    <td class="px-2 md:px-4 py-1 md:py-2">
                                                                        <span
                                                                            class=" bg-red-500/20 text-red-400 text-xs inline-flex items-center rounded-md px-2 py-1 ">{{ $gallery->likes }}</span>
                                                                    </td>
                                                                    <!-- Status -->
                                                                    <td class="px-2 md:px-4 py-1 md:py-2">
                                                                        <span class="capitalize inline-flex items-center rounded-md px-2 py-1 text-xs font-medium
                                                                                                                    {{ $gallery->status === 'active'
                                        ? 'bg-green-400/10 text-green-400'
                                        : 'bg-red-400/10 text-red-400' }}">
                                                                            {{ $gallery->status }}
                                                                        </span>
                                                                    </td>
                                                                    <!-- Actions -->
                                                                    <td class="px-2 md:px-4 py-1 md:py-2 text-right" x-data="{ open:false }"> <button
                                                                            @click="open = !open" class="text-gray-500 hover:text-[#181818] p-4">
                                                                            <i class="fa-solid fa-ellipsis-vertical"></i></button>
                                                                        <div x-show="open" @click.outside="open=false"
                                                                            class="absolute right-4 mt-2 w-44 bg-[#3A3A3A] border border-gray-200/20 rounded-lg shadow-lg z-10 text-center">
                                                                            <a href="#" data-id="{{ $gallery->id }}"
                                                                                class="deleteBtn block py-2
                                                                                                                                                            text-red-600 hover:bg-red-50">
                                                                                <i class="fa-solid fa-trash mr-2"></i> Remove
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-6 text-gray-400">
                                                No galleries found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-3">
                                {{ $galleries->links() }}
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </section>
@endsection