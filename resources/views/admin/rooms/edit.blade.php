@extends('admin.layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-6">Update Room</h1>

    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.rooms.form')

        <div class="mt-6 flex justify-end">
            <a href="{{ route('admin.rooms.index') }}" 
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 mr-3">
               Cancel
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Update 
            </button>
        </div>
    </form>
</div>
@endsection