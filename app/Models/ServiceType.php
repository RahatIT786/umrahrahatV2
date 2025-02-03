<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceType extends Model
{
    use HasFactory;
    protected $fillable = ['service_type', 'delete_status'];

    public function packageUserEnquires()
    {
        return $this->hasMany(package_user_enquire::class, 'package_user_service_type', 'id');
    }
}
