<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard', [
            'stats' => [
                'rooms' => Room::count(),
                'bookings' => Booking::count(),
                'users' => User::where('is_admin', '0')->count(),
                'pending_bookings' => Booking::where('status', 'pending')->count()
            ],
            'recentBookings' => Booking::with(['user', 'room'])
                                    ->latest()
                                    ->take(5)
                                    ->get(),
            'pendingCount' => Booking::where('status', 'pending')->count()
        ]);
    }
}
