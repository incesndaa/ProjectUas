<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookings()
    {
        $bookings = Booking::with(['user', 'room'])->latest()->get();
        return view('admin.bookings', compact('bookings'));
    }

    public function approveBooking(Booking $booking)
    {
        $booking->update(['status' => 'approved']);
        // Kirim notifikasi ke user
        return back()->with('success', 'Booking approved successfully');
    }

    public function rejectBooking(Booking $booking)
    {
        $booking->update(['status' => 'rejected']);
        // Kirim notifikasi ke user
        return back()->with('success', 'Booking rejected');
    }
}
