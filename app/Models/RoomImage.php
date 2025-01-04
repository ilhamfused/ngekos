<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomImage extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'image',
        'room_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
