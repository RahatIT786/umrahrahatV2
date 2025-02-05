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
        'service_type',
        'departure_type',
        'package_days',
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
        'makkah_nights',
        'madina_nights',
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

    public function getPkgFlights(){
        if(empty($this->flight_ids)){
            return [];
        }
        $flightIds = explode(',', $this->flight_ids);
        return FlightManagement::whereIn('id', $flightIds)->pluck('FlightName','id')->toArray();
    }

    public function getPkgDepartureCities(){
        if(empty($this->departure_city_ids)){
            return [];
        }
        $departureCityIds = explode(',', $this->departure_city_ids);
        return DepartureCity::whereIn('id', $departureCityIds)->pluck('CityName','id')->toArray();
    }

    public function getPkgInclusions(){
        if(empty($this->inclusion_ids)){
            return [];
        }
        $inclusionIds = explode(',', $this->inclusion_ids);
        return inclusion::whereIn('id', $inclusionIds)->pluck('InclusionName','id')->toArray();
    }

    //written by abusin -start

    public function sharingDetails(){
        return $this->hasOne(PackageDetail::class,'pkg_id');
    }
    public function packageDetail()
    {
       $data= $this->hasOne(PackageDetail::class, 'pkg_id');
        // dd($data);
       return $data;
    }

   
    public function packageType()
{
    return $this->belongsTo(PackageType::class, 'package_type_ids');
}



     //written by abusin -end



    protected $casts = [
        'type_ids' => 'array',
    ];
}
