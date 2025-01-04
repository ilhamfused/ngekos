<?php

namespace App\Models;

use App\Models\BoardingHouse;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    protected $fillable = [
        'image',
        'name',
        'slug'
    ];

    public function boardingHouses()
    {
        return $this->hasMany(BoardingHouse::class);
    }
}
