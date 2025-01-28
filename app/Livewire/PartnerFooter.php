<?php

namespace App\Livewire;

use App\Models\AgentSignUp;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PartnerFooter extends Component
{

    public $name;
    public $mobile;
    public $email;
    public $city;

    protected $rules = [
        'name' => 'required|string|max:255',
        'mobile' => 'required|numeric',
        'email' => 'required|email|unique:agent_sign_ups,email',
        'city' => 'required|string|max:255',
    ];

    public function submitAgentSignUp(){

        $this->validate();
        AgentSignUp::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'city' => $this->city,
        ]);
        session()->flash('success', 'Your form has been submitted successfully!');

        // Clear the form fields after submission
        $this->reset();
    }



    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.partner-footer');
    }
}
