<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['room', 'user'])
                         ->latest()
                         ->paginate(10);
                         
        return view('admin.bookings.index', compact('bookings'));
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => ['required', 'in:pending,approved,rejected'],
        ]);

        $booking->status = $request->status;
        $booking->save();

        return redirect()->back()->with('success', 'Status booking diperbarui.');
    }

    public function approve(Booking $booking)
    {
        $booking->update(['status' => 'approved']);
        return back()->with('success', 'Booking approved!');
    }

    public function reject(Booking $booking)
    {
        $booking->update(['status' => 'rejected']);
        return back()->with('error', 'Booking rejected!');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return back()->with('success', 'Booking deleted!');
    }
}
