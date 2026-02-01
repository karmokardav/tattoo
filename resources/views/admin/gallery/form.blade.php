<div class=" flex items-center justify-center p-6">

    <div class="w-full max-w-md bg-[#2F2F2F] p-6 rounded-xl shadow">

        <h2 class="text-white text-lg font-semibold mb-4 text-center">
            Add New Gallery
        </h2>

        <form method="POST" action="{{ route('galleries.store') }}" enctype="multipart/form-data">
            @csrf

            {{-- Title --}}
            <div class="mb-4">
                <label class="text-gray-400 text-sm">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full mt-1 px-3 py-2 rounded-lg bg-[#3A3A3A] text-white">
                @error('title')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Status --}}
            <div class="mb-4">
                <label class="text-gray-400 text-sm">Status</label>
                <select name="status" class="w-full mt-1 px-3 py-2 rounded-lg bg-[#3A3A3A] text-white">
                    <option value="" disabled selected>Select status</option>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Image --}}
            <div class="mb-5">
                <label class="block text-gray-400 text-sm mb-2">
                    Image
                </label>

                <div
                    class="relative flex items-center justify-center w-full px-4 py-6 border-2 border-dashed border-gray-600 rounded-xl bg-[#2F2F2F] hover:border-indigo-500 transition">

                    <input type="file" name="image" class="absolute inset-0 opacity-0 cursor-pointer">

                    <div class="text-center pointer-events-none">
                        <svg class="mx-auto h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16V4m0 0L3 8m4-4l4 4m6 4v8m0 0l4-4m-4 4l-4-4" />
                        </svg>

                        <p class="mt-2 text-sm text-gray-400">
                            Click to upload or drag & drop
                        </p>
                        <p class="text-xs text-gray-500">
                            PNG, JPG up to 2MB
                        </p>
                    </div>
                </div>

                @error('image')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="flex justify-end gap-2">
                <a href="{{ url()->previous() }}" class="px-4 py-2 bg-gray-500/20 text-gray-300 rounded">
                    Back
                </a>

                <button type="submit" class="px-4 py-2 bg-green-500/20 text-green-400 rounded">
                    Submit
                </button>
            </div>
            <div id="formMessage" class="mb-3 text-sm"></div>
        </form>

    </div>
</div>