<?php

namespace App\Livewire\UserFront\Umrahv2;

use Livewire\Component;
use Livewire\Attributes\Layout; 

class Catring extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.catring');
    }
}
