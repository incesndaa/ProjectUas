<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

// Auth routes
// Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// User routes
// Route::middleware(['auth'])->group(function () {
//     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::resource('bookings', BookingController::class);
//     Route::get('rooms/availability', [RoomController::class, 'checkAvailability'])->name('rooms.availability');
// });


// Admin routes
// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     Route::resource('rooms', RoomController::class);
//     Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
//     Route::put('/bookings/{booking}/approve', [AdminController::class, 'approveBooking'])->name('admin.bookings.approve');
//     Route::put('/bookings/{booking}/reject', [AdminController::class, 'rejectBooking'])->name('admin.bookings.reject');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
