@extends('layout.app')
@section('title', 'Booking Ruang')
@@session('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Booking Ruang</h1>
    
    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <!-- Pilihan Ruang -->
        <div>
            <label for="room_id" class="block text-sm font-medium text-gray-700">Pilih Ruang</label>
            <select name="room_id" id="room_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-150">
                @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }} (Kapasitas: {{ $room->capacity }})</option>
                @endforeach
            </select>
        </div>

        <!-- Tanggal Booking -->
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="date" id="date" min="{{ date('Y-m-d') }}" 
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-150" required>
        </div>

        <!-- Waktu -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="start_time" class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
                <input type="time" name="start_time" id="start_time" min="08:00" max="20:00" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-150" required>
            </div>
            <div>
                <label for="end_time" class="block text-sm font-medium text-gray-700">Waktu Selesai</label>
                <input type="time" name="end_time" id="end_time" min="08:00" max="20:00" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-150" required>
            </div>
        </div>

        <!-- Tujuan -->
        <div>
            <label for="purpose" class="block text-sm font-medium text-gray-700">Tujuan</label>
            <textarea name="purpose" id="purpose" rows="3" 
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-150" 
                      placeholder="Contoh: Meeting Proyek Akhir" required></textarea>
        </div>

        <!-- Tombol Submit -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('home') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition duration-150">
                Batal
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-150">
                Submit Booking
            </button>
        </div>
    </form>
</div>
    
@endsession