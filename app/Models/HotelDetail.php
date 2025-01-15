<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotelName',
        'hotelPrice',
        'currency',
        'hotelCity',
        'hotelStarRating',
        'hotelAddress',
        'hotelDiscription',
        'hotelCheckInTime',
        'hotelCheckOutTime',
        'hotelDistance',
        'hotelMainImage',
        'hotelImage1',
        'hotelImage2',
        'hotelImage3',
        'hotelImage4',
        'hotelImage5',
        'deleteStatus',
    ];
}
