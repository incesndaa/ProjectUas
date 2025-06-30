<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::latest()->paginate(10);
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string',
            'capacity' => 'required|integer',
            'facilities' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $fullPath = $request->file('image')->store('room_images', 'public');
            $validated['image'] = basename($fullPath);
        }

        Room::create($validated);

        return redirect()->route('admin.rooms.index')
                       ->with('success', 'Room added successfully!');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $room = Room::findOrFail($id);
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string',
            'capacity' => 'required|integer',
            'facilities' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($room->image) {
                Storage::disk('public')->delete('room_images/'.$room->image);
            }
            
            $fullPath = $request->file('image')->store('room_images', 'public');
            $validated['image'] = basename($fullPath);
        }

        // Update room
        $room->update($validated);

        return redirect()->route('admin.rooms.index')
                       ->with('success', 'Room updated successfully!');
    }

    public function destroy(Room $room)
    {
        if ($room->image) {
            Storage::disk('public')->delete($room->image);
        }
        
        $room->delete();
        
        return redirect()->route('admin.rooms.index')
                         ->with('success', 'Ruangan berhasil dihapus!');
    }
}
