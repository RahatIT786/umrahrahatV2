<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class OTPController extends Controller
{
    public function sendOTP(Request $request)
    {
        // Validate phone number
        $request->validate([
            'phone' => 'required|digits:10', // Assuming a 10-digit phone number
        ]);

        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);

        // Save OTP in session for verification
        Session::put('otp', $otp);
        Session::put('phone', $request->phone);

        // API Credentials
        $userID = "sazeim2009@gmail.com";
        $password = "1UT8QP6B";
        $senderID = "your_sender_id";
        $entityID = "your_entity_id";
        $templateID = "your_template_id";
        
        // OTP Message
        $message = "Your OTP is $otp. Please enter this to verify your phone number.";
        $message = urlencode($message); // URL encoding

        // API URL
        $apiURL = "http://your-sms-gateway.com/sendSMS?UserID=$userID&Password=$password&SenderID=$senderID&Phno={$request->phone}&Msg=$message&EntityID=$entityID&TemplateID=$templateID&FlashMsg=0";

        // Send API request
        $response = Http::get($apiURL);

        // Check response
        if ($response->successful()) {
            return back()->with('success', 'OTP sent successfully!');
        } else {
            return back()->with('error', 'Failed to send OTP.');
        }
    }

    public function verifyOTP(Request $request)
    {
        // Validate input
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        // Retrieve OTP from session
        $storedOTP = Session::get('otp');
        $storedPhone = Session::get('phone');

        if ($request->otp == $storedOTP) {
            // OTP is valid, clear session
            Session::forget(['otp', 'phone']);
            return back()->with('success', 'Phone number verified successfully!');
        } else {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }
    }
}
