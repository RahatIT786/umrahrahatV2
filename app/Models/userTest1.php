<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userTest1 extends Model
{
    public function age(){
        return $this->hasOne(userAge1::class,'age','id');
    }

    public function phone(){
        return $this->hasOne(userPhone1::class,'phone','id');
    }
}
