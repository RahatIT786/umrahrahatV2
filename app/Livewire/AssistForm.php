<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\AssistForm as AssistFormModal;
use Illuminate\Support\Facades\Session;

class AssistForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $adult;
    public $children;
    public $captcha;
    public $captcha_code;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'captcha' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'phone.required' => 'Phone is required.',
        'captcha.required' => 'CAPTCHA is required.',
    ];

    public function mount()
    {
        $this->generateCaptcha();
    }

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

        AssistFormModal::create([
            'user_name' => $this->name,
            'user_email' => $this->email,
            'user_phone' => $this->phone,
            'user_adult' => $this->adult,
            'user_children' => $this->children,
        ]);

        $this->reset(['name', 'email', 'phone', 'adult', 'children', 'captcha']);
        $this->generateCaptcha();
        session()->flash('message', 'Your query was sent successfully!');
    }

    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.assist-form');
    }
}
