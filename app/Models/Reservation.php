<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'room_id',
        'check_in',
        'check_out'
    ];

    //Each reservation belongs to one room

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    // each reservation belongs to a guest
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}

