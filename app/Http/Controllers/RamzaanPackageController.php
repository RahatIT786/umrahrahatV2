<?php

namespace App\Http\Controllers;

use App\Models\DepartureCity;
use App\Models\FlightManagement;
use App\Models\HotelDetail;
use App\Models\inclusion;
use App\Models\RamzaanFlavour;
use App\Models\RamzaanPackage;
use App\Models\RamzaanSharing;
use Illuminate\Http\Request;

class RamzaanPackageController extends Controller
{
    



    public function createPackageWithMultipleFlavours(Request $request){
        // RamzaanFlavour::create([
        //     'name'=>'bronze'
        // ]);
        // RamzaanSharing::create([
        //     'name'=>'quad'
        // ]);
        // RamzaanFlavour::create([
        //     'name'=>'gold'
        // ]);
        // RamzaanSharing::create([
        //     'name'=>'classic'
        // ]);
        // return "data added successfully";

      HotelDetail::create([
          'hotelName'=>'manazil al qibla',
          'hotelCity'=>'makka',
          'hotelStarRating'=>5,
          'hotelPrice'=>1000,
          'hotelAddress'=>'makka',
          'hotelDiscription'=>'madina DESC',
          'hotelCheckInTime'=>'12:00',
          'hotelCheckOutTime'=>'12:00',
          'hotelDistance'=>1,
      ]);

    // inclusion::create([
    //     'InclusionName'=>'ticket',

    // ]);
    // inclusion::create([
    //     'InclusionName'=>'visa',

    // ]);
    // inclusion::create([
    //     'InclusionName'=>'hotel',

    // ]);
    // inclusion::create([
    //     'InclusionName'=>'laundry',

    // ]);

    // FlightManagement::create([
    //     'FlightName'=>'flynas',
    // ]);
    // FlightManagement::create([
    //     'FlightName'=>'akasa',
    // ]);
    // FlightManagement::create([
    //     'FlightName'=>'saudi ariline',
    // ]);
    // FlightManagement::create([
    //     'FlightName'=>'indigo',
    // ]);

    // DepartureCity::create([
    //     'CityName'=>'mumbai',
    // ]);
    // DepartureCity::create([
    //     'CityName'=>'delhi',
    // ]);
    // DepartureCity::create([
    //     'CityName'=>'bangalore',
    // ]);
    // DepartureCity::create([
    //     'CityName'=>'lucknow',
    // ]);

   //start transaction
//    DB::beginTransaction();
//    try{
//     $package=RamzaanPackage::create([
//         'name',
//         'days',
//         'city_id',
//         'flight_id',
//         'description',
//         'payment_policy',
//         'important_notes',
//         'cancellation_policy',
//         'flight_transport',
//         'meals',
//         'visa_taxes',
//         'inclusions',
//         'exclusions',
//         'itinerary',
//         'image_path',
//     ]);

    //prepare data for flavour details
//     $flavorDetails=[];
//     foreach()

//    }catch(){

//    }


      return "data added successfully";
    }

    // public function addSharing(){
    //     RamzaanFlavour::create([
    //         'name'=>'sharing',
    //     ]);
    // }




}
