<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/rooms/availability', [RoomController::class, 'checkAvailability'])->name('rooms.availability');

Route::middleware('auth')->group(function () {
    //room
    
    
    //bookings
    Route::get('/bookings', [RoomController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{booking}', [RoomController::class, 'show'])->name('bookings.show');
    Route::get('/bookings/{booking}/edit', [RoomController::class, 'edit'])->name('bookings.edit');
    Route::put('/bookings/{booking}', [RoomController::class, 'update'])->name('bookings.update');
    Route::delete('/bookings/{booking}', [RoomController::class, 'destroy'])->name('bookings.destroy');
    Route::post('/bookings', [RoomController::class, 'store'])->name('bookings.create');


    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
