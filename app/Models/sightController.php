<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sightController extends Model
{
    use HasFactory;

    // If needed, specify the table name (if it's not pluralized correctly)
    protected $table = 'sight_controllers';

    // Define the fillable fields to prevent mass-assignment vulnerabilities
    protected $fillable = [
        'sightName',
        'sightPrice',
        'sightPrice1',
        'currency',
        'sightCity',
        'sightDiscription',
        'sightInclusion',
        'sightNotes',
        'sightMainImage',
        'sightImage1',
        'sightImage2',
        'sightImage3',
        'delete_status',
    ];
}
