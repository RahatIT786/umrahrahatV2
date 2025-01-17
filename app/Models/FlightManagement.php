<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'FlightName',
        'FlightImagePath',
        'delete_status',
    ];
}
