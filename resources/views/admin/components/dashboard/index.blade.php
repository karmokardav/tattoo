<section class="overflow-y-auto scrollbar-hide p-6">

        <!-- Employee Detail -->
        <div class="bg-[#aaa9a9] rounded-2xl p-6 shadow-lg ">
            <div class="flex flex-col md:flex-row justify-between gap-6">
                <div class=" border border-[#9c1428] rounded-2xl p-4 flex items-center gap-4">
                    <img src="https://i.pravatar.cc/80" class="w-16 h-16 rounded-full" />
                    <div>
                        <h2 class="text-xl font-semibold">Natashia Khaleira</h2>
                        <p class="text-muted text-sm">Head of UX Design</p>
                        <p class="text-muted text-sm">(+62) 812 3456 7890</p>
                        <p class="text-muted text-sm">natasiakhaleira@gmail.com</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <select class="bg-soft rounded-lg px-3 py-2 text-sm">
                        <option>This Year</option>
                    </select>
                    <button class="bg-accent text-black px-4 py-2 rounded-lg font-medium">
                        Download Info
                    </button>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <div class="bg-[#d4d3d3] rounded-xl p-4">
                    <p class="text-lg font-bold md:text-2xl md:font-bold">309</p>
                    <p class="text-muted text-sm">Total User</p>
                </div>
                <div class="bg-[#d4d3d3] rounded-xl p-4">
                    <p class="text-lg font-bold md:text-2xl md:font-bold">309</p>
                    <p class="text-muted text-sm">Total User</p>
                </div>
                <div class="bg-[#d4d3d3] rounded-xl p-4">
                    <p class="text-lg font-bold md:text-2xl md:font-bold">309</p>
                    <p class="text-muted text-sm">Total User</p>
                </div>
                <div class="bg-[#d4d3d3] rounded-xl p-4">
                    <p class="text-lg font-bold md:text-2xl md:font-bold">309</p>
                    <p class="text-muted text-sm">Total User</p>
                </div>
            </div>
        </div>

        <!-- Attendance History -->
        <div class="bg-card rounded-2xl p-6 shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Attendance History</h3>
                <div class="flex gap-2">
                    <button class="bg-soft px-3 py-1 rounded-lg text-sm">Sort</button>
                    <button class="bg-soft px-3 py-1 rounded-lg text-sm">Filter</button>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card -->
                <div class="bg-soft rounded-xl p-4">
                    <div class="flex justify-between mb-2">
                        <p class="text-sm text-muted">March 08, 2023</p>
                        <span class="bg-emerald-500/20 text-emerald-400 text-xs px-2 py-1 rounded-full">On Time</span>
                    </div>
                    <p class="text-sm">Check In: <span class="font-semibold">08:53</span></p>
                    <p class="text-sm">Check Out: <span class="font-semibold">17:15</span></p>
                </div>

                <div class="bg-soft rounded-xl p-4">
                    <div class="flex justify-between mb-2">
                        <p class="text-sm text-muted">March 07, 2023</p>
                        <span class="bg-yellow-500/20 text-yellow-400 text-xs px-2 py-1 rounded-full">Late</span>
                    </div>
                    <p class="text-sm">Check In: <span class="font-semibold">08:27</span></p>
                    <p class="text-sm">Check Out: <span class="font-semibold">17:09</span></p>
                </div>

                <div class="bg-soft rounded-xl p-4">
                    <div class="flex justify-between mb-2">
                        <p class="text-sm text-muted">March 06, 2023</p>
                        <span class="bg-red-500/20 text-red-400 text-xs px-2 py-1 rounded-full">Absent</span>
                    </div>
                    <p class="text-sm">Check In: -</p>
                    <p class="text-sm">Check Out: -</p>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center gap-2 mt-6">
                <button class="bg-soft px-3 py-1 rounded">1</button>
                <button class="bg-soft px-3 py-1 rounded">2</button>
                <button class="bg-soft px-3 py-1 rounded">3</button>
                <button class="bg-soft px-3 py-1 rounded">...</button>
                <button class="bg-soft px-3 py-1 rounded">10</button>
            </div>
        </div>

    </section>