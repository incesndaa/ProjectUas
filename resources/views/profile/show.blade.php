@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container mx-auto py-8">
    <div class="bg-white rounded-lg shadow p-6 max-w-2xl mx-auto">
        <div class="flex items-center space-x-6 mb-6">
            <!-- Foto Profil -->
            <div class="w-24 h-24 rounded-full bg-gray-200 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        <i class="fas fa-user text-4xl"></i>
                    </div>
            </div>
            
            <!-- Info User -->
            <div>
                <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
        </div>

        <!-- Detail Profil -->
        <div class="space-y-4">

            <div>
                <h2 class="font-semibold text-gray-500 mb-2">Member since</h2>
                <p><i class="far fa-calendar-alt mr-2 text-gray-400"></i> 
                   {{ $user->created_at->translatedFormat('d F Y') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection