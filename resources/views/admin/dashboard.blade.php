@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <section class="bg-[#393738] font-sans">
        <div class="flex min-h-screen">

            <!-- Sidebar -->
            @include('admin.sidebar')

            <!-- Main Content -->
            <div class="flex-1 flex flex-col  bg-[#393738]">

                <!-- Top Bar -->
                @include('admin.header')

                <!-- Page Content -->
                <div class="p-6">

                    
                    <!-- Card -->
                    <!-- <div class="bg-white rounded-xl shadow border border-blue-400 p-6">
                            <h2 class="text-lg font-semibold mb-4">Top Channels</h2>

                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left">
                                    <thead class="text-gray-500 border-b">
                                        <tr>
                                            <th class="py-3">Source</th>
                                            <th>Visitors</th>
                                            <th>Revenues</th>
                                            <th>Sales</th>
                                            <th>Conversion</th>
                                        </tr>
                                    </thead>

                                    <tbody class="divide-y">
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 flex items-center gap-3">
                                                <img src="https://www.google.com/favicon.ico" class="w-6 h-6">
                                                Google
                                            </td>
                                            <td>3.5K</td>
                                            <td class="text-green-600">$5,768</td>
                                            <td>590</td>
                                            <td class="text-blue-600">4.8%</td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 flex items-center gap-3">
                                                <img src="https://abs.twimg.com/favicons/twitter.ico" class="w-6 h-6">
                                                Twitter
                                            </td>
                                            <td>2.2K</td>
                                            <td class="text-green-600">$4,635</td>
                                            <td>467</td>
                                            <td class="text-blue-600">4.3%</td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 flex items-center gap-3">
                                                <img src="https://github.githubassets.com/favicons/favicon.svg" class="w-6 h-6">
                                                Github
                                            </td>
                                            <td>2.1K</td>
                                            <td class="text-green-600">$4,290</td>
                                            <td>420</td>
                                            <td class="text-blue-600">3.7%</td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 flex items-center gap-3">
                                                <img src="https://vimeo.com/favicon.ico" class="w-6 h-6">
                                                Vimeo
                                            </td>
                                            <td>1.5K</td>
                                            <td class="text-green-600">$3,580</td>
                                            <td>389</td>
                                            <td class="text-blue-600">2.5%</td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 flex items-center gap-3">
                                                <img src="https://www.facebook.com/favicon.ico" class="w-6 h-6">
                                                Facebook
                                            </td>
                                            <td>1.2K</td>
                                            <td class="text-green-600">$2,740</td>
                                            <td>230</td>
                                            <td class="text-blue-600">1.9%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>

    </section>

@endsection