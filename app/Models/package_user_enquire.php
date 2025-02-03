<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class package_user_enquire extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_user_name',
        'package_user_email',
        'package_user_phone',
        'package_user_adult',
        'package_user_child',
        'package_user_package_name',
        'package_user_service_type',
        'package_user_departure_type'
     ] ;

     public function serviceType()
     {
         return $this->belongsTo(ServiceType::class, 'package_user_service_type', 'id');
     }
}
