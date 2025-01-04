<?php

namespace App\Models;

use App\Models\City;
use App\Models\Room;
use App\Models\Bonus;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    //

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'city_id',
        'category_id',
        'price',
        'address'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
