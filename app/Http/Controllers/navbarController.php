<?php

namespace App\Http\Controllers;

use App\Models\HolidayCity;
use Illuminate\Http\Request;
use App\Models\ZiyaratCity;

class navbarController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'name'  => 'required|string|max:255',
        //     'email' => 'required|email|unique:agents,email',
        //     'phone' => 'required|string|max:15',
        // ]);

        dd($request->email);

        // Store data in the database
        // Agent::create([
        //     'name'  => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        // ]);

        // Redirect back with success message
        return back()->with('success', 'Agent registered successfully!');
    }
    // Method to fetch all packages and pass them to the view
    public function showPackages()
    {
        $Ziyaratcities = ZiyaratCity::where('delete_status',1)->get();
        $holidaycities = HolidayCity::where('delete_status',1)->get();
        return view('user.includes.navbar', ['Ziyaratcities'=>$Ziyaratcities,'holidaycities'=>$holidaycities]);  // Pass data to the Blade view
    }
}
