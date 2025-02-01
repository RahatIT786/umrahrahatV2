<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transportController extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow the plural convention
    protected $table = 'transport_controllers';

    protected $fillable = [
        'carType',
        'carSector',
        'currency',
        'seatsCount',
        'price',
        'transportImage',
        'airConditioner',
        'termsAndConditision',
        'discription',
        'delete_status',
    ];
        // Relationship with CarType
        public function carType()
        {
            return $this->belongsTo(CarType::class, 'carType');
        }
    
        // Relationship with CarSector
        public function carSector()
        {
            return $this->belongsTo(CarSector::class, 'carSector');
        }
}
