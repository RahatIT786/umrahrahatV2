<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarType extends Model
{
    use HasFactory;
    protected $fillable = ['car_type', 'delete_status'];
    // Relationship with TransportController
    // public function transportControllers()
    // {
    //     return $this->hasOne(transportController::class, 'carType');
    // }
}
