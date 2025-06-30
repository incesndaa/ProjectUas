<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;
use App\Http\Controllers\Admin\RoomsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware('auth')->group(function () {
    //room
<<<<<<< HEAD
    Route::get('/rooms/availability', [RoomController::class, 'checkAvailability'])->name('rooms.availability');

=======

    Route::get('/rooms/availability', [RoomController::class, 'checkAvailability'])->name('rooms.availability');

    
    
>>>>>>> 413575b70380f7c56c4d3ccd84579348c93da3e4
    //bookings
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Manajemen Ruangan (CRUD)
    Route::get('/rooms', [AdminRoomController::class, 'index'])->name('admin.rooms.index');
    Route::get('/rooms/create', [AdminRoomController::class, 'create'])->name('admin.rooms.create');
    Route::post('/rooms', [AdminRoomController::class, 'store'])->name('admin.rooms.store');
    Route::get('/rooms/{room}/edit', [AdminRoomController::class, 'edit'])->name('admin.rooms.edit');
    Route::put('/rooms/{room}', [AdminRoomController::class, 'update'])->name('admin.rooms.update');
    Route::delete('/rooms/{room}', [AdminRoomController::class, 'destroy'])->name('admin.rooms.destroy');
    
    // Manajemen Booking
    Route::get('/bookings', [AdminBookingController::class, 'index'])->name('admin.bookings.index');
    Route::post('/bookings/{booking}/approve', [AdminBookingController::class, 'approve'])->name('admin.bookings.approve');
    Route::post('/bookings/{booking}/reject', [AdminBookingController::class, 'reject'])->name('admin.bookings.reject');
    Route::delete('/bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('admin.bookings.destroy');
    Route::patch('/bookings/{booking}/status', [AdminBookingController::class, 'updateStatus'])->name('admin.bookings.updateStatus');

});

require __DIR__.'/auth.php';
