<?php

namespace App\Livewire\UserFront\Umrahv2;

use App\Models\CateringController;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Catring extends Component
{

    public $foodDetails;
    public $isOpen = false;
    public $package = [];


    public function mount(){
        $this->foodDetails=CateringController::where('delete_status',1)->get();

    }
    public function openModal($package = [])
    {
        $this->package = $package;
       // dd($this->package);
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.catring');
    }
}
