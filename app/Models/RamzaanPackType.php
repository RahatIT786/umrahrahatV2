<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamzaanPackType extends Model
{
    use HasFactory;

    protected $fillable=['type_name'];



    

    public function ramzaanPackSharing(){
        return $this->hasMany(RamzaanPackSharing::class);
    }
}
