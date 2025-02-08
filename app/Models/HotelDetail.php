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
        'hotelYouTube',
        'hotelMap',
        'hotelManagerContect',
        'hotelCheckInTime',
        'hotelCheckOutTime',
        'hotelDistance',
        'hotel_amenities',
        'hotelMainImage',
        'hotelImage1',
        'hotelImage2',
        'hotelImage3',
        'hotelImage4',
        'hotelImage5',
        'deleteStatus',
    ];


     //written by abusin -start

    public function packageDetail()
    {
        return $this->belongsTo(PackageDetail::class, 'makka_hotel_id');
    }
     //written by abusin -end




}
