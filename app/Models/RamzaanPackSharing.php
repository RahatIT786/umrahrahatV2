<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamzaanPackSharing extends Model
{
    use HasFactory;

    protected $fillable=['sharing_type','price','ramzaan_pack_type_id'];


   public function RamzaanPackType(){
    return $this->belongsTo(RamzaanPackType::class);
   }
}
