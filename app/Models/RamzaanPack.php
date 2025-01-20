<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamzaanPack extends Model
{
    use HasFactory;

    protected $fillable=[
        'master_name',
        'package_data',
        'departure_city',
        'flight_name',
        'infant_price',
        'days',
        'description',
        'itinerary',
    ];

   protected $casts=[
    'package_data'=>'array',
    'departure_city' => 'array', // Optionally cast departure_city to an array if needed
    'flight_name' => 'array', // Optionally cast flight_name to an array if needed
    'infant_price' => 'array', 
   ];
}
