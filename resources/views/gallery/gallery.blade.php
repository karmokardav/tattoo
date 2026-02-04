@extends('layouts.app')

@section('title', 'Gallery')
@section('content')
<main class="bg-[#393738] min-h-screen text-white antialiased">
    @include('components.header.header')
    <section class="relative overflow-hidden px-4">
        <div class="container mx-auto  py-8">
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
    <section class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-9 gap-3 mb-8 px-4 md:px-8">

        @forelse($galleries as $gallery)
            <div class="group ">

                <!-- Image box -->
                <div class="w-full h-40 sm:h-48 md:h-56 lg:h-64 overflow-hidden rounded-lg bg-gray-800">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" loading="lazy"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                        onclick="openImageOnly('{{ $gallery->id }}','{{ asset('storage/' . $gallery->image) }}')">
                </div>

                <!-- Info -->
                <div class="flex items-center justify-between mt-1 text-gray-300">

                    <!-- Title -->
                    <h3 class="text-white truncate max-w-[60%] text-[10px] sm:text-[11px] md:text-xs">
                        {{ $gallery->title }}
                    </h3>

                    <!-- Views & Likes -->
                    <div class="flex items-center gap-2 text-[9px] sm:text-[10px] md:text-xs">

                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-eye"></i>
                            <span id="view-count-{{ $gallery->id }}">{{ $gallery->views }}</span>
                        </span>

                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-heart text-red-500"></i>
                            <span id="like-count-{{ $gallery->id }}">{{ $gallery->likes }}</span>
                        </span>

                    </div>
                </div>

            </div>
        @empty
            <p class="text-gray-400 col-span-full text-center">
                No galleries found
            </p>
        @endforelse

    </section>
    <div id="imageOnlyModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50"
        onclick="closeImageOnly()">

        <img id="imageOnlySrc" class="max-w-[90%] max-h-[90%] rounded-lg">
    </div>
    <script>
        let liking = false;
        function openImageOnly(id, image) {

            // STEP 1: popup image দেখানো
            document.getElementById('imageOnlySrc').src = image;
            document.getElementById('imageOnlyModal').classList.remove('hidden');
            document.getElementById('imageOnlyModal').classList.add('flex');

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // STEP 2: VIEW বাড়ানো (AJAX)
            fetch(`/gallery/view/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
                .then(res => res.json())
                .then(data => {
                    document.getElementById(`view-count-${id}`).innerText = data.views;
                })
                .catch(err => console.error('View error:', err));

            // like
            if (liking) return;
            liking = true;

            fetch(`/gallery/like/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(res => res.json())
                .then(data => {
                    liking = false;
                    document.getElementById(`like-count-${id}`).innerText = data.likes;
                });

        }

        function closeImageOnly() {
            document.getElementById('imageOnlyModal').classList.add('hidden');
            document.getElementById('imageOnlyModal').classList.remove('flex');
        }

    </script>

</main>