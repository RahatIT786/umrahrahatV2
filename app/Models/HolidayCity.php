<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HolidayCity extends Model
{
    use HasFactory;
    protected $fillable = ['Holiday_city','delete_status'];
}
