<?php

namespace App\Livewire\UserFront\Umrahv2;

use Livewire\Component;
use Livewire\Attributes\Layout; 
use App\Models\transportController;

class TransfersSingle extends Component
{
    public $transportDetail;
    public $car_id;
    public $carsectormaster, $cartypemaster, $star_rating, $car_type_id, $car_sector_id;

    public function mount($id) 
    {
        $this->car_id = $id;
        $this->transportDetail = transportController::find($this->car_id);
        $this->car_sector_id = $this->transportDetail->carSector;
        $this->car_type_id = $this->transportDetail->carType;
    }
    public function getcars()
    {
        // return transportController::with(['cartypemaster', 'carsectormaster'])->get();
        return transportController::search('carType', $this->car_type_id)->search('carSector', $this->car_sector_id)->get();
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.transfers-single');
    }
}
