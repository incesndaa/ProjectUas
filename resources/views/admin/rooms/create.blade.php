@extends('admin.layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-6">Tambah Ruangan Baru</h1>
    
    <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.rooms.form')
        
        <div class="mt-6 flex justify-end">
            <a href="{{ route('admin.rooms.index') }}" 
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 mr-3">
               Batal
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Simpan Ruangan
            </button>
        </div>
    </form>
</div>
@endsectiona