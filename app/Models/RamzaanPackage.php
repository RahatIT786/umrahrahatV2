<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RamzaanPackage extends Model
{
    protected $fillable = [
        'name',
        'days',
        'city',
        'flight',
        'description',
        'infant',
        'child',
        'child_with_bed',
        'child_without_bed',
        'payment_policy',
        'important_notes',
        'cancellation_policy',
        'flight_transport',
        'meals',
        'visa_taxes',
        'inclusions',
        'exclusions',
        'itinerary',
        'image_path',
        ];


        public function city(){
            return $this->belongsTo(DepartureCity::class);
        }

        public function flight(){
            return $this->belongsTo(FlightManagement::class);
        }

        public function ramzaanFlavourDetails(){
            return $this->hasMany(RamzaanFlavourDetail::class);
        }



















}
