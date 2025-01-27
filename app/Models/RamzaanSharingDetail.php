<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RamzaanSharingDetail extends Model
{
    protected $fillable=[
        'sharing_id',
        'flavour_detail_id',
        'price',

    ];



    public function sharing(){
        return $this->belongsTo(RamzaanSharing::class);
    }
    public function flavourDetail(){
        return $this->belongsTo(RamzaanFlavourDetail::class);
    }
}
