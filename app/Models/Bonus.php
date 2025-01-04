<?php

namespace App\Models;

use App\Models\BoardingHouse;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    protected $fillable = [
        'boarding_house_id',
        'name',
        'image',
        'description',
    ];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
