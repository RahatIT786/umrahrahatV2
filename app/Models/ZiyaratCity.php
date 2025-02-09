<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZiyaratCity extends Model
{
    use HasFactory;
    protected $fillable = ['ziyarat_city','delete_status'];
}
