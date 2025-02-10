<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;


class OtpRegistration extends Component
{
    public $name, $email, $phone, $successMessage = null, $otpSent = false;

    public function sendOTP()
    {

        $this->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
        ]);

        $otp = rand(100000, 999999);
        Session::put('otp', $otp);
        Session::put('phone', $this->phone);
        Session::put('name', $this->name);
        Session::put('email', $this->email);

        // API Credentials
        $userID = "rahatacnbiz"; 
        $password = "bgzc1444BG"; 
        $senderID = "RAHATI"; 
        $entityID = "1701169182688909047"; 
        $templateID = "1707169339153047342";

        $message = "Dear {$this->name}, your OTP for verification is $otp. Do not share it with anyone.";
        $apiURL = "http://nimbusit.biz/api/SmsApi/SendSingleApi?UserID=$userID&Password=$password&SenderID=$senderID&Phno={$this->phone}&Msg=".urlencode($message)."&EntityID=$entityID&TemplateID=$templateID";

        $response = Http::get($apiURL);
        if ($response->successful() && isset($response['Status']) && $response['Status'] === "OK") {
            $this->successMessage = "OTP has been sent to {$this->phone}";
            $this->otpSent = true; // 
            $this->dispatch('openOtpModal'); // 
        } else {
            $this->successMessage = "Failed to send OTP. Please try again.";
            $this->otpSent = false;
        }

        $this->dispatch('openOtpModal');
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.otp-registration');
    }
}
