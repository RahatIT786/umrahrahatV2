<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransferForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_email',
        'user_phone',
        'user_adult',
        'user_children',
        'car_type',
        'sector_type',
        'delete_status'
    ];
}
