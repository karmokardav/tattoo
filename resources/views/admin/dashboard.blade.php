@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <section class="bg-[#393738] font-sans h-screen overflow-hidden">
        <div class="flex h-full">

            <!-- Sidebar -->
            @include('admin.components.sidebar.sidebar')

            <!-- Main Content -->
            <div class="flex-1 flex flex-col  bg-[#393738]">
                <!-- Top Bar -->
                @include('admin.header')

                <div id="main-content">
                    @include('admin.components.dashboard.index')
                </div>

            </div>
        </div>
    </section>
@endsection