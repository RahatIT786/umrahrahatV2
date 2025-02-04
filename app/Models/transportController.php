<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SearchScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transportController extends Model
{
    use HasFactory, SearchScopes;

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
        public function cartypemaster()
        {
            return $this->belongsTo(CarType::class, 'carType' ,'id');
        }
    
        // Relationship with CarSector
        public function carsectormaster()
        {
            return $this->belongsTo(CarSector::class, 'carSector','id');
        }
        public function scopeSearchCarTypeMaster($q, $value)
        {
            return $q->when(!empty($value), function ($qr) use ($value) {
                $qr->whereHas('cartypemaster', function ($query) use ($value) {
                    $query->where('car_type', "LIKE", "%{$value}%");
                });
            });
        }
}
