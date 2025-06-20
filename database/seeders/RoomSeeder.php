<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => 'Ruang Auditorium',
                'location' => 'Gedung Utama Lantai 1', 
                'capacity' => 100,
                'facilities' => 'Proyektor, Whiteboard, AC',
                'is_active' => true
            ],
            [
                'name' => 'Ruang B2',
                'location' => 'Gedung Utama Lantai 2',
                'capacity' => 50,
                'facilities' => 'Proyektor, AC',
                'is_active' => true
            ]
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
