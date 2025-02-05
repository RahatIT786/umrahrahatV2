<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hotel_user_enquire extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_user_name',
        'package_user_email',
        'package_user_phone',
        'package_user_adult',
        'package_user_child',
        'package_user_hotel_name',
     ] ;
}
