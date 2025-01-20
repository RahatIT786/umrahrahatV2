<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainPackage extends Model
{
    use HasFactory;

    // Specify the new table name
    protected $table = 'main_packages'; // Change this to your new table name

    protected $fillable = [ 
        'name',
        'package_type_ids',
        'description',
        'packageImage',
        'package_includes',
        'flights',
        'Depart_city',
        'payment_policy',
        'important_notes',
        'cancellation_policy',
        'inclusion',
        'exclusion',
        'itinerary',
        'flight_transport',
        'packageMeals', 
        'visa_taxes',
        'delete_status',
    ];
    public function scopeDesc($query)
    {
        return $query->OrderBy('id', 'DESC');
    }

    public function scopeActive($query)
    {
        return $query->where('delete_status', 1);
    }

    public function pkgDetails()
    {
        return $this->hasMany(PackageDetail::class, 'pkg_id', 'id')
                ->orderBy('g_share', 'asc');
    }
    public function getPkgTypeNamesAttribute()
    {
        if (empty($this->type_ids)) {
            return [];
        }

        // Convert the comma-separated string into an array
        $pkgTypeIds = explode(',', $this->type_ids);
        
        // Retrieve the names from the PkgType model
        return PackageType::whereIn('id', $pkgTypeIds)->pluck('package_type','id')->toArray();
    }

    protected $casts = [
        'type_ids' => 'array',
    ];
}
