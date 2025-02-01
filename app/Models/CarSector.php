<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarSector extends Model
{
    use HasFactory;
    protected $fillable = ['car_sector', 'delete_status'];
        // // Relationship with TransportController
        // public function transportControllers()
        // {
        //     return $this->hasOne(transportController::class, 'carSector');
        // }
}
