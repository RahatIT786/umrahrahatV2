<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CateringController extends Model
{
    use HasFactory;

    // Table name is explicitly defined since it's not following Laravel's plural naming convention
    protected $table = 'catering_controller';

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'foodType',
        'foodPrice',
        'currency',
        'foodBreakFast',
        'foodLunch',
        'foodDinner',
        'foodBreakFastImagePath',
        'foodLunchImagePath',
        'foodDinnerImagePath',
        'footPdf',
        'delete_status',
    ];
}
