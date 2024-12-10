<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'type',
        'price',
        'status'
    ];

    //a room can have many reservations

    public function reservations()
    {
        return $this->hasMany(Reservation::class);

    }
}
