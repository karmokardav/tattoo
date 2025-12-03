@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <section class="bg-[#393738] font-sans">
        <!-- Sidebar -->
        <div class="flex h-screen">
            <aside class="w-64 bg-[#181818] text-white flex flex-col hidden md:flex">
                <div class="px-9 py-7 text-2xl font-bold border-b border-[#939393]/40">
                    InkMaster
                </div>
                <nav class="load-page flex-1 p-6">
                    <a href="/page/dashboard" class="block py-3 px-3 hover:bg-[#9c1428] rounded-md">
                        <i class="fa-solid fa-bars mr-2 text-white"></i> Dashboard
                    </a>
                    <a href="{{ route('home') }}" class="block py-3 px-3 hover:bg-[#9c1428] rounded-md">
                        <i class="fa-solid fa-house mr-2 text-white"></i> Home
                    </a>
                    <a href="/page/gallery" class="load-page block py-3 px-3 hover:bg-[#9c1428] rounded-md">
                        <i class="fa-regular fa-image mr-2 text-white"></i> Gallery
                    </a>

                    <a href="/page/blog" class="load-page block py-3 px-3 hover:bg-[#9c1428] rounded-md">
                        <i class="fa-solid fa-blog mr-2 text-white"></i> Blog
                    </a>

                    <a href="/page/about" class="load-page block py-3 px-3 hover:bg-[#9c1428] rounded-md">
                        <i class="fa-solid fa-info-circle mr-2 text-white"></i> About
                    </a>

                    <a href="/page/contact" class="load-page block py-3 px-3 hover:bg-[#9c1428] rounded-md">
                        <i class="fa-regular fa-envelope mr-2 text-white"></i> Contact
                    </a>

                </nav>
                <div class="p-6 border-t border-gray-700 mt-auto ">
                    <a href="{{ route('logout') }}"
                        class="block text-center py-3 px-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white border-t border-[#939393]/40 rounded-md">
                        Logout
                    </a>
                </div>
            </aside>
            <div class="flex-1 flex flex-col">
                <header class="flex justify-end items-center bg-[#9c1428] border-b border-[#939393]/40 p-6">
                    <!-- <h1 class="text-2xl font-bold text-white"><i class="fa-solid fa-bars mr-2"></i>Dashboard</h1> -->
                    <div class="flex items-center gap-4">
                        <a href=""><i class="fa-regular fa-bell text-white"></i></i></a>
                        <a href=""><i class="fa-regular fa-message text-white"></i></i></a>
                        <a href="">
                            <div class="flex gap-2 items-center">
                                <h1 class="text-white">Shuvo Sarkar</h1>
                                <img src="{{ asset('images/tattoo1.jpg') }}" alt="" class="w-10 h-10 rounded-full">
                            </div>
                        </a>
                    </div>
                </header>

                <!-- dashboard body -->
                <div class=" p-6" id="content-area">
                    @if (view()->exists('pages.dashboard'))
                        @include('pages.dashboard')
                    @else
                        <div id="partial-content">
                            <h1 class="text-2xl text-white">Welcome</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const content = document.getElementById("content-area");

                // click delegation on document — নিরাপদ কারণ links dynamic হতে পারে
                document.addEventListener("click", function (e) {
                    const a = e.target.closest && e.target.closest('a.load-page');
                    if (!a) return; // not our link

                    const href = a.getAttribute('href');
                    if (!href || href === '#') return; // nothing to do

                    // allow external links, mailto, tel etc to work normally
                    const isExternal = /^(https?:)?\/\//i.test(href) || href.startsWith('mailto:') || href.startsWith('tel:');
                    if (isExternal) return;

                    e.preventDefault();
                    loadPage(href, true);
                });

                // handle browser back/forward
                window.addEventListener('popstate', function (ev) {
                    const url = ev.state?.url ?? '/admin/dashboard';
                    if (url) loadPage(url, false);
                });

                async function loadPage(url, pushState = true) {
                    if (!content) return;
                    content.innerHTML = '<div class="p-4 text-white">Loading...</div>';

                    try {
                        const res = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } });

                        // handle common non-OK statuses
                        if (res.status === 401 || res.status === 419) {
                            content.innerHTML = '<div class="text-yellow-300 p-4">Authentication required. Please login.</div>';
                            return;
                        }
                        if (res.status === 302 || res.status === 403) {
                            content.innerHTML = '<div class="text-red-400 p-4">Access denied or redirected. Check your permissions.</div>';
                            return;
                        }
                        if (!res.ok) {
                            content.innerHTML = `<div class="text-red-400 p-4">Server error (${res.status}). Try again.</div>`;
                            return;
                        }

                        const text = await res.text();

                        // Parse and extract #partial-content if present
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(text, 'text/html');
                        const partial = doc.querySelector('#partial-content');

                        if (partial) {
                            content.innerHTML = partial.innerHTML;
                        } else if (doc.body && doc.body.innerHTML.trim()) {
                            // fallback: use body HTML (safe-ish)
                            content.innerHTML = doc.body.innerHTML;
                        } else {
                            content.innerHTML = text;
                        }

                        // update history
                        if (pushState) {
                            try { history.pushState({ url }, '', url); } catch (err) { /* ignore */ }
                        }
                    } catch (err) {
                        console.error('loadPage error', err);
                        content.innerHTML = '<div class="text-red-500 p-4">Error loading page. Check console for details.</div>';
                    }
                }

                // optional: initial load if current path is /page/...
                const initPath = window.location.pathname;
                if (initPath.startsWith('/page/')) {
                    loadPage(initPath, false);
                }
            });
        </script>


    </section>

@endsection