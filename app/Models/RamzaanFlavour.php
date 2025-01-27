<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RamzaanFlavour extends Model
{
    protected $fillable = ['name'];

    public function ramzaanSharingDetails(){

        return $this->hasMany(RamzaanSharingDetail::class);
    }

    public function ramzaanFlavourDetails(){
        
        return $this->hasMany(RamzaanFlavourDetail::class);
    }
}
