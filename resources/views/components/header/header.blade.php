<section
    x-data="{ open: false }"
    class="flex justify-between items-center px-6 md:px-8 py-4 text-white w-full bg-[#181818] border-b border-[#939393]/40 sticky top-0 z-10">

    <!-- Logo -->
    <a href="/" class="text-2xl font-bold tracking-wider">InkStory</a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex gap-8 text-lg">
        <li><a href="/" class="hover:text-[#9c1428]">Home</a></li>
        <li><a href="{{ route('galleries.index') }}" class="hover:text-[#9c1428]">Gallery</a></li>
        <li><a href="/blog" class="hover:text-[#9c1428]">Blog</a></li>
        <li><a href="/about" class="hover:text-[#9c1428]">About</a></li>
        <li><a href="/contact" class="hover:text-[#9c1428]">Contact</a></li>
    </ul>

    <!-- Desktop CTA -->
    @if (Auth::check())
        <a href="{{ route('logout') }}"
           class="hidden md:block bg-[#9c1428] hover:bg-[#7d7d7d] px-4 py-2 rounded-lg font-semibold">
           <i class="fa-solid fa-arrow-right-from-bracket mr-1"></i>
            Logout
        </a>
    @else
        <a href="{{ route('login') }}"
           class="hidden md:block bg-[#9c1428] hover:bg-[#7d7d7d] px-4 py-2 rounded-lg font-semibold">
            <i class="fa-solid fa-arrow-right-to-bracket mr-1"></i>
           Login
        </a>
    @endif

    <!-- Mobile Hamburger -->
    <button @click="open = !open" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Mobile Menu -->
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="absolute top-full left-0 w-full bg-[#181818] border-t border-[#939393]/40 md:hidden">

        <ul class="flex flex-col text-center py-4 space-y-4 text-lg">
            <li><a href="/" class="hover:text-[#9c1428]">Home</a></li>
            <li><a href="/gallery" class="hover:text-[#9c1428]">Gallery</a></li>
            <li><a href="/blog" class="hover:text-[#9c1428]">Blog</a></li>
            <li><a href="/about" class="hover:text-[#9c1428]">About</a></li>
            <li><a href="/contact" class="hover:text-[#9c1428]">Contact</a></li>

            @if (Auth::check())
                <li>
                    <a href="{{ route('logout') }}"
                       class="inline-block bg-[#9c1428] hover:bg-[#7d7d7d] px-6 py-2 rounded-lg font-semibold">
                        Logout
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"
                       class="inline-block bg-[#9c1428] hover:bg-[#7d7d7d] px-6 py-2 rounded-lg font-semibold">
                        Login
                    </a>
                </li>
            @endif
        </ul>
    </div>
</section>
