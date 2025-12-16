<div x-data="{ isModelopen: false }" id="gallery-modal">
    <button id="openModalBtn" x-on:click="isModelopen = true"
        class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white rounded-lg bg-[#9c1428] shadow-theme-xs hover:bg-brand-600">
        Add New
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
    </button>
    <!-- <button id="editModalBtn" x-on:click="isModelopen = true"></button> -->

    <div x-show="isModelopen" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto modal z-99999"
        id="modalContainer">
        <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]">
        </div>
        <div class="relative w-full max-w-[584px] rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-10">
            <!-- close btn -->
            <button id="closeModalBtn" x-on:click="isModelopen = false"
                class="group absolute right-3 top-3 z-999 flex h-9.5 w-9.5 items-center justify-center rounded-full bg-gray-200 text-gray-500 transition-colors hover:bg-gray-300 hover:text-gray-500 dark:bg-gray-800 dark:hover:bg-gray-700 sm:right-6 sm:top-6 sm:h-11 sm:w-11">
                <svg class="transition-colors fill-current group-hover:text-gray-600 dark:group-hover:text-gray-200"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.04289 16.5413C5.65237 16.9318 5.65237 17.565 6.04289 17.9555C6.43342 18.346 7.06658 18.346 7.45711 17.9555L11.9987 13.4139L16.5408 17.956C16.9313 18.3466 17.5645 18.3466 17.955 17.956C18.3455 17.5655 18.3455 16.9323 17.955 16.5418L13.4129 11.9997L17.955 7.4576C18.3455 7.06707 18.3455 6.43391 17.955 6.04338C17.5645 5.65286 16.9313 5.65286 16.5408 6.04338L11.9987 10.5855L7.45711 6.0439C7.06658 5.65338 6.43342 5.65338 6.04289 6.0439C5.65237 6.43442 5.65237 7.06759 6.04289 7.45811L10.5845 11.9997L6.04289 16.5413Z"
                        fill=""></path>
                </svg>
            </button>

            <form class="">
                <input type="hidden" name="gallery_id" id="gallery_id">
                <input type="hidden" name="user_id" id="user_id">
                <h4 class="mb-6 text-lg font-medium text-gray-800 dark:text-white/90" id="modal_title">
                    Add gallery
                </h4>
                <div class="grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-2 mt-4">
                    <div class="flex gap-x-4 justify-between">
                        <label for="image" class="block text-gray-700 dark:text-white/90">Image</label>
                        <input type="file" id="image" name="image" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>
                <div class="flex items-center justify-start mt-4">
                    <input type="checkbox" id="status" name="status" class="mr-2">
                    <label for="status" class="ml-2">Active</label>
                </div>

                <div class="flex items-center justify-end w-full gap-3 mt-6">
                    <button type="button" x-on:click="isModelopen = false" id="cancelModalBtn"
                        class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 shadow-theme-xs transition-colors hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 sm:w-auto">
                        Cancel
                    </button>
                    <button type="submit"
                        class="flex justify-center w-full px-4 py-3 text-sm font-medium text-white rounded-lg bg-[#9c1428] shadow-theme-xs hover:bg-brand-600 sm:w-auto">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>