<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RamzaanFlavourDetail extends Model
{
    protected $fillable=[
        'package_id',
        'flavour_id',
        'makka_hotel_id',
        'madina_hotel_id',
    ];


    public function packages(){
        return $this->belongsTo(RamzaanPackage::class);
    }

    public function flavour(){
        return $this->belongsTo(RamzaanFlavour::class);
    }

    public function makkaHotel(){
        return $this->belongsTo(HotelDetail::class,'makka_hotel_id');
    }
    public function madinaHotel(){
        return $this->belongsTo(HotelDetail::class,'madina_hotel_id');
    }
}
