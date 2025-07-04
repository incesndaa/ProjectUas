@extends('layouts.app')

@section('title', 'BookSpace')

@section('content')
<!-- Hero Section -->
<div class="bg-blue-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Easy Campus Room Booking</h1>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Online room booking system for students and lecturers</p>
        
        @guest
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="inline-block px-6 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition duration-200">
                Login for Booking
            </a>
            <a href="{{ route('register') }}" class="inline-block px-6 py-3 border border-white text-white font-medium rounded-lg hover:bg-blue-700 transition duration-200">
                Register
            </a>
        </div>
        @endguest
        
        @auth
        <a href="{{ route('rooms.availability') }}" class="inline-block px-6 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition duration-200">
            Make a Booking Now
        </a>
        @endauth
    </div>
</div>

<!-- Features Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Features</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Fitur 1 -->
            <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                <div class="mx-auto h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Real-time Schedule</h3>
                <p class="text-gray-600">View live room availability with updated schedule</p>
            </div>
            
            <!-- Fitur 2 -->
            <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                <div class="mx-auto h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Fast Process</h3>
                <p class="text-gray-600">Book a room in just 3 easy steps</p>
            </div>
            
            <!-- Fitur 3 -->
            <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                <div class="mx-auto h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Flexible Booking</h3>
                <p class="text-gray-600">Easily reschedule or cancel bookings anytime</p>
            </div>
        </div>
    </div>
</div>

<!-- How It Works -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">How to Book</h2>
        
        <div class="space-y-8 max-w-3xl mx-auto">
            <!-- Langkah 1 -->
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-blue-600 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mr-4">1</div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Login/Account Registration</h3>
                    <p class="text-gray-600">Use your campus account to access the system</p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="flex-shrink-0 bg-blue-600 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mr-4">2</div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Choose the room you want to book</h3>
                    <p class="text-gray-600">Select the room you want to book on the room page</p>
                </div>
            </div>
            
            <!-- Langkah 2 -->
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-blue-600 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mr-4">3</div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Check Availability</h3>
                    <p class="text-gray-600">Select a date and time to view available spaces</p>
                </div>
            </div>
            
            <!-- Langkah 3 -->
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-blue-600 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold mr-4">4</div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Submit Your Booking Form</h3>
                    <p class="text-gray-600">Complete the order data and submit</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection