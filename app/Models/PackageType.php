<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageType extends Model
{
    use HasFactory;
    protected $fillable = [
        'packageType',
        'delete_status',
    ];
    public function scopeActive($query)
    {
        return $query->where('delete_status', 1);
    }
}
