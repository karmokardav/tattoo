@extends('layouts.app')

@section('title', 'Gallery')
@section('content')
  <div class="page-gallery p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6" id="partial-content">
    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/20">
      <div class="px-5 py-4 sm:px-6 sm:py-5 flex justify-between">
        <h3 class="text-2xl  text-gray-800 dark:text-white/90">
          Gallery
        </h3>
        <div>
          @include('pages.gallery_model')
        </div>
      </div>
      <div class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
        <!-- Table gallery -->
        <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
          <div class=" px-5 sm:px-6">
            <table class="w-full " id="gallery-table">
              <thead class="py-3">
                <tr>
                  <th class="text-left py-3 px-2">#</th>
                  <th class="text-left py-3 px-2">Photo</th>
                  <th class="text-left py-3 px-2">Status</th>
                  <th class="text-left py-3 px-2">Actions</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                <tr>
                  <td class="py-3 px-2">1</td>
                  <td class="py-3 px-2"><img src="{{ asset('images/tattoo1.jpg') }}" alt="Tattoo 1"
                      class="w-12 h-12 object-cover rounded"></td>

                  <td class="py-3 px-2">
                    <span class="px-3 py-1 rounded bg-green-500 text-white text-sm">
                      active
                    </span>
                  </td>

                  <td class="py-3 px-4 space-x-2">
                    <button id="editModalBtn" x-on:click="isModelopen = true"
                      class="px-3 py-1 rounded bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-white text-sm">
                      Edit
                    </button>

                    <button class="px-3 py-1 rounded bg-red-200 text-red-700 dark:bg-red-700 dark:text-white text-sm">
                      Delete
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="border-t border-gray-200 px-6 py-4 dark:border-gray-800">
            <div class="mb-2">
              <p class="text-theme-sm text-gray-500 dark:text-gray-400" id="gallery-table-total-items">
              </p>
            </div>
            <div class="flex items-center justify-between">
              <button id="gallery-table-prev"
                class="text-theme-sm shadow-theme-xs flex items-center gap-2 rounded-lg  bg-white px-2 py-2 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 sm:px-3.5 dark:border-gray-700 dark:bg-[#9c1428] dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-200">
                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.58301 9.99868C2.58272 10.1909 2.65588 10.3833 2.80249 10.53L7.79915 15.5301C8.09194 15.8231 8.56682 15.8233 8.85981 15.5305C9.15281 15.2377 9.15297 14.7629 8.86018 14.4699L5.14009 10.7472L16.6675 10.7472C17.0817 10.7472 17.4175 10.4114 17.4175 9.99715C17.4175 9.58294 17.0817 9.24715 16.6675 9.24715L5.14554 9.24715L8.86017 5.53016C9.15297 5.23717 9.15282 4.7623 8.85983 4.4695C8.56684 4.1767 8.09197 4.17685 7.79917 4.46984L2.84167 9.43049C2.68321 9.568 2.58301 9.77087 2.58301 9.99715C2.58301 9.99766 2.58301 9.99817 2.58301 9.99868Z"
                    fill=""></path>
                </svg>

                <span class="hidden sm:inline"> Previous </span>
              </button>

              <ul class="hidden items-center gap-0.5 sm:flex" id="gallery-table-pagination">

              </ul>

              <button id="gallery-table-next"
                class="text-theme-sm shadow-theme-xs flex items-center gap-2 rounded-lg  bg-white px-2 py-2 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 sm:px-3.5 dark:border-gray-700 dark:bg-[#9c1428] dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-200">
                <span class="hidden sm:inline"> Next </span>

                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.4175 9.9986C17.4178 10.1909 17.3446 10.3832 17.198 10.53L12.2013 15.5301C11.9085 15.8231 11.4337 15.8233 11.1407 15.5305C10.8477 15.2377 10.8475 14.7629 11.1403 14.4699L14.8604 10.7472L3.33301 10.7472C2.91879 10.7472 2.58301 10.4114 2.58301 9.99715C2.58301 9.58294 2.91879 9.24715 3.33301 9.24715L14.8549 9.24715L11.1403 5.53016C10.8475 5.23717 10.8477 4.7623 11.1407 4.4695C11.4336 4.1767 11.9085 4.17685 12.2013 4.46984L17.1588 9.43049C17.3173 9.568 17.4175 9.77087 17.4175 9.99715C17.4175 9.99763 17.4175 9.99812 17.4175 9.9986Z"
                    fill=""></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <!-- Table Five -->
      </div>
    </div>
  </div>
@endsection