<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    
    protected $fillable = [
        'name', 
        'location', 
        'capacity', 
        'facilities', 
        'image', 
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
