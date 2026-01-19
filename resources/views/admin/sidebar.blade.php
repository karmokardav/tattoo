<aside id="sidebar" class="fixed md:static inset-y-0 left-0 z-50
         w-64 bg-[#181818] text-gray-300
         transform -translate-x-full md:translate-x-0
         transition-all duration-300 ease-in-out
         flex flex-col">

    <!-- Header -->
    <div class="px-6 py-5 text-white text-xl font-bold flex justify-between items-center">
        <span>TailAdmin</span>
        <button id="closeSidebar" class="md:hidden text-xl">✕</button>
    </div>

    <!-- Nav -->
    <nav class="flex-1 px-4 space-y-1">

        <a href="/gallery" class="nav-link flex items-center gap-3 px-3 py-2 rounded bg-slate-800 text-white">
            📊 Dashboard
        </a>

        <!-- Dropdown -->
        <button class="dropdown-btn w-full flex items-center justify-between px-3 py-2 rounded hover:bg-slate-800">
            <span class="flex items-center gap-3">🛒 eCommerce</span>
            <span>▾</span>
        </button>

        <div class="dropdown hidden ml-6 space-y-1">
            <a href="#" class="block px-3 py-2 rounded hover:bg-slate-800">Products</a>
            <a href="#" class="block px-3 py-2 rounded hover:bg-slate-800">Orders</a>
        </div>

        <a href="#" class="nav-link flex items-center gap-3 px-3 py-2 rounded hover:bg-slate-800">
            📈 Analytics
        </a>

        <a href="#" class="nav-link flex items-center gap-3 px-3 py-2 rounded hover:bg-slate-800">
            📣 Marketing
        </a>

        <a href="#" class="nav-link flex items-center gap-3 px-3 py-2 rounded hover:bg-slate-800">
            👥 CRM
        </a>
    </nav>

    <!-- Logout -->
    <div class="p-6 border-t border-gray-700">
        <a href="{{ route('logout') }}"
            class="block text-center py-3 bg-[#9c1428] hover:bg-[#7d7d7d] text-white rounded-md">
            Logout
        </a>
    </div>
</aside>

<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');

    // Open
    openBtn?.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    // Close
    closeBtn?.addEventListener('click', closeSidebar);
    overlay?.addEventListener('click', closeSidebar);

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    }

    // Dropdown
    document.querySelectorAll('.dropdown-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.nextElementSibling.classList.toggle('hidden');
        });
    });

    // Active link auto detect
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('bg-slate-800', 'text-white');
        }
    });

    // ESC key close
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeSidebar();
    });
</script>