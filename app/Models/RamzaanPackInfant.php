<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamzaanPackInfant extends Model
{
    use HasFactory;

    protected $fillable =['infant','child','child_with_bed','child_without_bed'];

    public function pack(){
        return $this->belongsTo(RamzaanPack::class);
    }
}
