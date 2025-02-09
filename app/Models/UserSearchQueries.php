<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSearchQueries extends Model
{
    use HasFactory;
    protected $fillable=[
        'information',
        'page',
    ];
}
