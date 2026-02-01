<div class="flex">

    <aside class="h-screen bg-[#181818] text-gray-400 w-20 md:w-64 transition-all duration-300 flex flex-col">

        <div class="flex items-center justify-between md:justify-start
            px-4 py-4 border-b border-white/10">

            <span class="hidden md:block text-white font-bold text-lg">
                Beyond UI
            </span>

            <button class="md:hidden flex items-center justify-center 
               w-7 h-7 text-white text-xl">
                <i class="fa fa-bars"></i>
            </button>

        </div>
        <nav class="flex-1 px-2 md:px-3 space-y-1 mt-6">

            <a href="{{ route(name: 'admin.dashboard') }}"
                class="flex items-center justify-center md:justify-start md:gap-3 px-0 md:px-3 py-2 rounded-lg hover:bg-white/10 hover:text-white transition">

                <i class="fa fa-home text-lg"></i>

                <span class="hidden md:block">
                    Dashboard
                </span>
            </a>
            <a href="{{ route('galleries.index') }}" onclick="loadPage(event, this.href)"
                class="flex items-center justify-center md:justify-start md:gap-3 px-0 md:px-3 py-2 rounded-lg hover:bg-white/10 hover:text-white transition">

                <i class="fa fa-image text-lg"></i>
                <span class="hidden md:block">Gallery</span>
            </a>


            <!-- workspace -->
            <!-- <div x-data="{drop: false,top: 0}" class="relative">
                <button @click="drop = !drop; top = $el.getBoundingClientRect().top + window.scrollY;"
                    class="w-full flex items-center justify-center gap-3 px-3 py-2 rounded-lg hover:bg-white 10 transition">
                    <i class="fa fa-layer-group text-lg"></i>

                    <span x-show="open" class="hidden md:block">
                        Workspace
                    </span>

                    <i x-show="open" :class="drop ? 'rotate-180' : ''"
                        class="fa fa-chevron-down ml-auto text-xs hidden md:block transition-transform"></i>
                </button>

                <div x-show="drop" x-transition
                    class="hidden md:block ml-6 mt-1 space-y-1 text-sm border-l border-white/20">
                    <a class="block ml-4 px-3 py-1.5 rounded-md hover:bg-white/10">
                        Overview
                    </a>
                    <a class="block ml-4 px-3 py-1.5 rounded-md hover:bg-white/10">
                        Members
                    </a>
                    <a class="block ml-4 px-3 py-1.5 rounded-md hover:bg-white/10">
                        Integrations
                    </a>
                </div>

                <div x-show="drop" x-transition
                    class="md:hidden absolute left-full  -translate-y-5 ml-3 w-48 space-y-1 text-sm bg-[#1f1f1f] border border-white/10 rounded-lg shadow-lg z-50 p-2">
                    <a class="block px-3 py-1.5 rounded-md hover:bg-white/10">
                        Overview
                    </a>
                    <a class="block px-3 py-1.5 rounded-md hover:bg-white/10">
                        Members
                    </a>
                    <a class="block px-3 py-1.5 rounded-md hover:bg-white/10">
                        Integrations
                    </a>
                </div>
            </div> -->


        </nav>

        <div class="px-2 md:px-3 py-4 border-t border-white/10">
            <a href="#"
                class="flex items-center justify-center md:justify-start md:gap-3 px-0 md:px-3 py-2 rounded-lg hover:bg-white/10">
                <i class="fa fa-cog text-lg"></i>
                <span class="hidden md:block">Settings</span>
            </a>
        </div>

    </aside>
</div>
