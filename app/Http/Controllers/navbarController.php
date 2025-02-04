<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZiyaratCity;

class navbarController extends Controller
{
    // Method to fetch all packages and pass them to the view
    public function showPackages()
    {
        $Ziyaratcities = ZiyaratCity::where('delete_status',1)->get();
        return view('user.includes.navbar', ['Ziyaratcities'=>$Ziyaratcities]);  // Pass data to the Blade view
    }
}
