<?php

namespace App\Livewire\UserFront\Umrahv2;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\sightController;

class SingleSightSeeing extends Component
{
    public $sight_detail;
    public $sight_id;

    public function mount($id) 
    { 
        // Get the hotel detail by ID
        $this->sight_id = $id;
        $this->sight_detail = sightController::find($this->sight_id);
    }

    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.single-sight-seeing');
    }
}
