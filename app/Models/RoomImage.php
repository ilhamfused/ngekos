<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    //
    protected $fillable = [
        'image',
        'room_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
