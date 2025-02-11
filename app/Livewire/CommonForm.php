<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\CommonForm as CommonFormModel;

class CommonForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $adult;
    public $children,$captcha;
    public $package = [];

    public function mount($package = [])
    {
        $this->package = $package;
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required | email',
        'phone' => 'required',
        'captcha' => 'required|captcha',
    ];

    protected $messages = [
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'phone.required' => 'Phone is required.',
    ];

    public function submit()
    {
        // dd($this->package);
        $this->validate();
        CommonFormModel::create([
            'user_name' => $this->name,
            'user_email' => $this->email,
            'user_phone' => $this->phone,
            'user_adult' => $this->adult,
            'user_children' => $this->children,
            'package_name' => $this->package->service_type,
            'package_type' => $this->package->name,
        ]);
        $this->reset(['name', 'email', 'phone', 'adult', 'children']);
        session()->flash('message', 'Your query send successfully!');

        // Handle form submission with package details
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.common-form');
    }
}
