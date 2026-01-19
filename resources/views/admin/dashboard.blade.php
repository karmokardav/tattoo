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
                <!-- @include('admin.header')
                <div class="p-6">
                    
                </div> -->
            </div>
        </div>

    </section>

@endsection