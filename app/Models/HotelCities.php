<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelCities extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_city','delete_status'];
}
