@extends('layouts.app')
@section('title', 'Rooms')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Select Rooms</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">Browse our selection of meeting and conference spaces. Book the perfect room for your needs.</p>
    </div>

    <!-- Room Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($rooms as $room)
            @php
                $isBooked = in_array($room->id, $bookedRoomIds);
            @endphp
            
            <div class="relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-gray-100 {{ $isBooked ? 'opacity-75' : '' }}">
                <!-- Booked Badge -->
                @if($isBooked)
                    <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                        Booked
                    </div>
                @endif
                
                <!-- Room Image Placeholder -->
                <div class="h-48 bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center">
                        @if ($room->image)
                            <img src="{{ asset('room_images/' . $room->image) }}"
                                alt="{{ $room->name }}"
                                class="w-full h-full object-cover">
                        @else
                            <div class="flex items-center justify-center h-full text-gray-400">
                                <span class="text-sm">No Image</span>
                            </div>
                        @endif
                </div>
                
                <!-- Room Content -->
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 {{ $isBooked ? 'text-gray-500' : '' }}">
                            {{ $room->name }}
                        </h3>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold">
                            {{ $room->capacity }} pax
                        </span>
                    </div>
                    
                    <!-- Location -->
                    <div class="flex items-center text-gray-600 mb-4">
                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ $room->location }}</span>
                    </div>
                    
                    <!-- Facilities -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Facilities</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(explode(',', $room->facilities) as $facility)
                                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">
                                    {{ trim($facility) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Action Button -->
                    @unless($isBooked)
                    <div class="mt-4">
                        <a href="{{ route('bookings.create', ['room_id' => $room->id]) }}" 
                           class="w-full inline-flex justify-center items-center px-4 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-lg shadow-sm transition-all duration-200">
                            Book Now
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                    @else
                    <div class="mt-4 text-center text-sm text-gray-500">
                        Unavailable for selected dates
                    </div>
                    @endunless
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
