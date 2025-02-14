<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssistForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'user_email',
        'user_phone',
        'user_adult',
        'user_children',
    ];
}
