<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class testUser extends Model
{
    use HasFactory;

    public function phone(){
        return $this->hasOne(testPhone::class,'user_id');
    }
}
