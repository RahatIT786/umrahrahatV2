<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AgentSpeak extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.agent-speak');
    }
}
