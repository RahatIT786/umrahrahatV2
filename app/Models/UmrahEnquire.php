<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmrahEnquire extends Model
{
    protected $fillable=[
        'name',
        'mobile',
        'date_of_travel',
        'total_pax',
        'travel_type',
    ];
}
