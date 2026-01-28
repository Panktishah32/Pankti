@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1 class="text-6xl p-16 text-center bg-amber-800">Welcome to the My First Laravel App</h1>
    <div class="min-h-screen fluid-container flex items-center justify-center bg-gray-50 mt-10 overflow-hidden">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8 ">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Create Account</h2>
            
            <form action="/registration" method="POST" class="space-y-6">
                @csrf
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                        placeholder="John Doe"
                        required
                    >
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                        placeholder="john@example.com"
                        required
                    >
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 transform hover:scale-105"
                >
                    Register
                </button>

                <!-- Login Link -->
                <p class="text-center text-gray-600 text-sm">
                    Already have an account? 
                    <a href="/login" class="text-blue-600 hover:text-blue-700 font-semibold">Login here</a>
                </p>
            </form>
        </div>
    </div>
@endsection