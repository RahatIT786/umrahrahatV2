<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDepartureType extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
        'delete_status'
    ];

}
