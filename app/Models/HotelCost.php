<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCost extends Model
{
    use HasFactory;

    protected $table = 'hotel_costs';

    protected $fillable = [
        'hotel_id',
        'hotelSeasonStart',
        'hotelSeasonEnd',
        'hotelMeal',
        'hotelDouble',
        'hotelTriple',
        'hotelQuad',
        'hotelQuint',
    ];

    // Define relationship with Hotel model (if exists)
    public function hotel()
    {
        return $this->belongsTo(HotelDetail::class, 'hotel_id');
    }
}
