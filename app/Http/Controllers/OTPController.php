<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Models\Agent;

class OTPController extends Controller
{
    public function register(Request $request)
    {
        // $request->validate([
        //     'name'  => 'required|string|max:255',
        //     'email' => 'required|email|unique:agents,email',
        //     'phone' => 'required|unique:agents,phone',
        // ]);
        // dd($request->name);
        $agent = Agent::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        // dd( $agent);

        // Store agent info in session
        Session::put('agent', $agent);

        return redirect()->back();
    }

    public function logout()
    {
        Session::forget('agent');
        return redirect()->back();
    }

    public function sendOTP(Request $request)
    {
        // Validate phone, name, and email
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
        ]);

        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);

        // Save OTP in session for verification
        Session::put('otp', $otp);
        Session::put('phone', $request->phone);
        Session::put('name', $request->name);
        Session::put('email', $request->email);

        // API Credentials
        $userID = "rahatacnbiz"; // Replace with actual UserID
        $password = "bgzc1444BG"; // Replace with actual password
        $senderID = "RAHATI"; // DLT-approved Sender ID (Header ID)
        $entityID = "1701169182688909047"; // Your DLT Entity ID
        $templateID = "1707169339153047342"; // Replace with your actual approved Template ID

        // OTP Message (Ensure it matches the approved template)
        $message = "Dear {$request->name}, your OTP for verification is $otp. Do not share it with anyone.";
        $encodedMessage = urlencode($message); // URL encode the message

        // API URL with parameters
        $apiURL = "http://nimbusit.biz/api/SmsApi/SendSingleApi?"
            . "UserID=$userID"
            . "&Password=$password"
            . "&SenderID=$senderID"
            . "&Phno={$request->phone}"
            . "&Msg=$encodedMessage"
            . "&EntityID=$entityID"
            . "&TemplateID=$templateID"
            . "&FlashMsg=0";

        // Send API request
        $response = Http::get($apiURL);

        // Check response
        if ($response->successful()) {
            return back()->with('success', 'OTP sent successfully!');
        } else {
            return back()->with('error', 'Failed to send OTP. Please try again.');
        }
    }

    // public function verifyOTP(Request $request)
    // {
    //     // Validate input
    //     $request->validate([
    //         'otp' => 'required|digits:6',
    //     ]);

    //     // Retrieve OTP and user details from session
    //     $storedOTP = Session::get('otp');
    //     $storedPhone = Session::get('phone');
    //     $storedName = Session::get('name');
    //     $storedEmail = Session::get('email');

    //     if ($request->otp == $storedOTP) {
    //         // OTP is valid, clear session
    //         Session::forget(['otp', 'phone', 'name', 'email']);
    //         return back()->with('success', 'Phone number verified successfully!');
    //     } else {
    //         return back()->with('error', 'Invalid OTP. Please try again.');
    //     }
    // }
}
