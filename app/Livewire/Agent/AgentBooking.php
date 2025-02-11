<?php

namespace App\Livewire\Agent;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\DepartureCity;

class AgentBooking extends Component
{
    public $departCitys;
    public function mount(){
        $this->departCitys = DepartureCity::where('delete_status',1)->get();
    }

    #[Layout('agent.Layouts.app')]
    public function render()
    {
        return view('livewire.agent.agent-booking');
    }
}
