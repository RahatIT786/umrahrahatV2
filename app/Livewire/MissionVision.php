<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class MissionVision extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.mission-vision');
    }
}
