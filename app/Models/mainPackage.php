<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainPackage extends Model
{
    use HasFactory;

    // Specify the new table name
    protected $table = 'main_packages'; // Change this to your new table name

    protected $fillable = [
        'name',
        'package_type_ids',
        'description',
        'packageImage',
        'payment_policy',
        'important_notes',
        'cancellation_policy',
        'inclusion',
        'exclusion',
        'itinerary',
        'flight_transport',
        'packageMeals', 
        'visa_taxes',
        'delete_status',
    ];

    protected $casts = [
        'type_ids' => 'array',
    ];
}
