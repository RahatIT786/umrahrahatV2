<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageDetail extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'package_details';

    // Specify the columns that can be mass assigned
    protected $fillable = [
        'pkg_id',
        'pkg_type_id',
        'makka_category',
        'makka_hotel_id',
        'madina_category',
        'madina_hotel_id',
        'meal_type',
        'laundry_type',
        'g_share',
        'qt_share',
        'qd_share',
        't_share',
        'd_share',
        'single',
        'child_with_bed',
        'child_no_bed',
        'infant',
        'package_includes',
    ];

   

   //written by abusin -start
   public function packageType(): BelongsTo
   {
       return $this->belongsTo(PackageType::class, 'pkg_type_id');
   }

 // In PackageDetail.php
public function makkaHotelDetail()
{
    return $this->hasOne(HotelDetail::class, 'id','makka_hotel_id');
}

public function madinaHotelDetail()
{
    return $this->hasOne(HotelDetail::class, 'id','madina_hotel_id');
}
   //written by abusin -end

    
    // Optionally, you can cast some attributes to specific data types
    protected $casts = [
        'g_share' => 'decimal:2',
        'qt_share' => 'decimal:2',
        'qd_share' => 'decimal:2',
        't_share' => 'decimal:2',
        'd_share' => 'decimal:2',
    ];


}
