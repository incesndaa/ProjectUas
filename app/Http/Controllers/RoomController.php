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
