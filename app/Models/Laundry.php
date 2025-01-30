<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $fillable = [
        'laundry_type',
        'days',
        'price',
        'cloth_count',
        'note',
        'description',
        'image_path',
         'delete_status',
    ];
}
