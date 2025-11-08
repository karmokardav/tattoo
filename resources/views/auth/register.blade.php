@extends('layouts.app')
@section('title', 'register')

@section('content')
    <section class="min-h-screen flex">
        <!-- Left side image -->
        <div class="hidden md:flex w-1/2 bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1501594907352-04cda38ebc29');">
        </div>

        <!-- Right side form -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-[#181818]">
            <div class="max-w-md w-full p-8 space-y-6">
                <h2 class="text-3xl font-bold text-center text-gray-800">Create Account</h2>
                <p class="text-center text-gray-500 mb-4">Sign up to get started</p>

                <form action="{{ route('register_action') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-indigo-200">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-indigo-200">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-indigo-200">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring focus:ring-indigo-200">
                    </div>

                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                        Register
                    </button>
                </form>

                <p class="text-center text-sm text-gray-500 mt-4">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Login</a>
                </p>
            </div>
        </div>
    </section>
@endsection