<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\CatringForm as catringFormModal;
use Illuminate\Support\Facades\Session;

class CatringForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $adult;
    public $children,$captcha;
    public $package = [];
    public $food_name;

    public $captcha_code;

    public function mount($package = [])
    {
        $this->package = $package;
        $this->food_name = $this->package['foodType'];
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
        //dd($this->food_name);
        $this->validate();

        if (strtoupper($this->captcha) !== session('captcha')) {
            session()->flash('error', 'Incorrect CAPTCHA. Please try again.');
            $this->generateCaptcha();
            return;
        }

       $suss = catringFormModal::create([
            'user_name' => $this->name,
            'user_email' => $this->email,
            'user_phone' => $this->phone,
            'user_adult' => $this->adult,
            'user_children' => $this->children,
            'food_name' =>  $this->food_name,
        ]);
        $this->reset(['name', 'email', 'phone', 'adult', 'children','captcha']);
        session()->flash('message', 'Your query send successfully!');

        // Handle form submission with package details
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.catring-form');
    }
}
