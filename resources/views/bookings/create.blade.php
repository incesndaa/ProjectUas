@extends('layouts.app')
@section('title', 'Make a Booking')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Space Booking Form</h1>
        
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            
            <!-- Info Ruangan -->
            <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                <h2 class="text-lg font-semibold text-blue-600">{{ $room->name }}</h2>
                <p class="text-gray-600">{{ $room->location }}</p>
                <p class="text-sm text-gray-500 mt-1">Capacity: {{ $room->capacity }} orang</p>
            </div>

            <!-- Hidden Input -->
            <input type="hidden" name="room_id" value="{{ $room->id }}">
            
            <!-- Tanggal -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                <input type="date" name="date" id="date" 
                       value="{{ $date }}" min="{{ now()->format('Y-m-d') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <!-- Waktu -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="start_time" class="block text-sm font-medium text-gray-700 mb-1">Start Time</label>
                    <input type="time" name="start_time" id="start_time" 
                           value="{{ $start_time }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="end_time" class="block text-sm font-medium text-gray-700 mb-1">Finish Time</label>
                    <input type="time" name="end_time" id="end_time" 
                           value="{{ $end_time }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
            
            <!-- Tujuan -->
            <div class="mb-6">
                <label for="purpose" class="block text-sm font-medium text-gray-700 mb-1">Purpose</label>
                <textarea name="purpose" id="purpose" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                          placeholder="Example: Organization Seminar" required></textarea>
            </div>
            
            <!-- Tombol -->
            <div class="flex justify-end space-x-4">
                <a href="{{ url()->previous() }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Apply for Booking
                </button>
            </div>
        </form>
    </div>
</div>
@endsection