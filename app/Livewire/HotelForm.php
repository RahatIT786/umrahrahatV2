<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\HotelForm as HotelFormModel;
use Illuminate\Support\Facades\Session;


class HotelForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $adult;
    public $children,$captcha;
    public $package = [];
    public $captcha_code;

    public function mount($package = [])
    {
        $this->package = $package;
        $this->generateCaptcha();
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required | email',
        'phone' => 'required',
        'captcha' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'phone.required' => 'Phone is required.',
        'captcha.required' => 'CAPTCHA is required.',
    ];

    public function generateCaptcha()
    {
        $this->captcha_code = strtoupper(substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, 6));
        Session::put('captcha', $this->captcha_code);
    }

    public function submit()
    {
        $this->validate();
        if (strtoupper($this->captcha) !== session('captcha')) {
            session()->flash('error', 'Incorrect CAPTCHA. Please try again.');
            $this->generateCaptcha();
            return;
        }

       $suss = HotelFormModel::create([
            'user_name' => $this->name,
            'user_email' => $this->email,
            'user_phone' => $this->phone,
            'user_adult' => $this->adult,
            'user_children' => $this->children,
            'hotel_name' => $this->package['hotelName'],
            'hotel_cities' => $this->package['hotelCity'],
        ]);
        $this->reset(['name', 'email', 'phone', 'adult', 'children']);
        session()->flash('message', 'Your query send successfully!');

        // Handle form submission with package details
    }
    #[Layout('user.Layouts.app')]

    public function render()
    {
        return view('livewire.user_front.hotel-form');
    }
}
