<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainHoliday extends Model
{
    use HasFactory;
    protected $table = 'main_holidays';
    protected $fillable = [
        'name',
        'service_type',
        'package_days',
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
        'laundray_type',
        'food_type',
        'g_share_price',
        'qt_share_price',
        'qd_share_price',
        't_share_price',
        'd_share_price',
        'single_price',
        'child_w_b',
        'child_wo_b',
        'infants',
        'hotelIds',
        'delete_status',
    ];
    public function serviceCity()
    {
        return $this->belongsTo(HolidayCity::class, 'service_type' ,'id');
    }
}
