<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function checkAvailability(Request $request)
    {

        $today = now()->format('Y-m-d');
        $rooms = Room::where('is_active', true)->get();
        // dd($rooms);

        $bookedRoomIds = Booking::where('date', $today)
            ->pluck('room_id')
            ->toArray();

        return view('rooms.availability', [
            'rooms' => $rooms,
            'bookedRoomIds' => $bookedRoomIds,
        ]);

        // $validated = [];
    
        // if ($request->hasAny(['date', 'start_time', 'end_time'])) {
        //     $validated = $request->validate([
        //         'date' => 'required|date|after_or_equal:today',
        //         'start_time' => 'required|date_format:H:i',
        //         'end_time' => 'required|date_format:H:i|after:start_time'
        //     ]);
        // } else {
            
        //     $validated = [
        //         'date' => now()->format('Y-m-d'),
        //         'start_time' => '08:00',
        //         'end_time' => '17:00'
        //     ];
        // }

        // $bookedRooms = Booking::where('date', $validated['date'])
        //     ->where(function($query) use ($validated) {
        //         $query->whereBetween('start_time', [$validated['start_time'], $validated['end_time']])
        //             ->orWhereBetween('end_time', [$validated['start_time'], $validated['end_time']]);
        //     })
        //     ->pluck('room_id');

        // $availableRooms = Room::whereNotIn('id', $bookedRooms)
        //     ->where('is_active', true)
        //     ->get();

        // return view('rooms.availability', [
        //     'rooms' => $availableRooms,
        //     'date' => $validated['date'],
        //     'startTime' => $validated['start_time'],
        //     'endTime' => $validated['end_time']
        // ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
