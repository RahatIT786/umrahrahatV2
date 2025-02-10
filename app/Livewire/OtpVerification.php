<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class OtpVerification extends Component
{
    public $otp;

    public function verifyOTP()
    {
        $sessionOtp = Session::get('otp');

        if ($this->otp == $sessionOtp) {
            Session::forget('otp'); //
            $this->dispatch('closeOtpModal'); // Close the modal
            $this->dispatch('otpVerified'); //  Notify that OTP is verified
        } else {
            session()->flash('error', 'Invalid OTP. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.otp-verification');
    }
}
