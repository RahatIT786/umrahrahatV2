<?php

namespace App\Livewire\UserFront\Umrahv2;

use App\Models\CateringController;
use App\Models\Laundry as ModelsLaundry;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Laundry extends Component
{

    public $laundryDetails;
    public $isOpen = false;
    public $package = [];

    public function mount(){
       $this->laundryDetails=ModelsLaundry::where('delete_status',1)->get();

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
        return view('livewire.user_front.umrahv2.laundry');
    }
}
