<?php

namespace App\Livewire\Agent;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('agent.Layouts.app')]
    public function render()
    {
        return view('livewire.agent.dashboard');
    }
}
