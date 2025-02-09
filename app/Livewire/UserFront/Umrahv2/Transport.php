<?php

namespace App\Livewire\UserFront\Umrahv2;

use Livewire\Component;
use Livewire\Attributes\Layout; 
use App\Models\transportController;
use App\Models\CarType;
use App\Models\CarSector;

class Transport extends Component
{
    public $carsectormaster, $cartypemaster, $star_rating, $car_type_id, $car_sector_id;
    public function mount()
    {
        $this->carsectormaster = CarSector::select('car_sector', 'id')->where('delete_status',1)->get();
        $this->cartypemaster = CarType::select('car_type', 'id')->where('delete_status',1)->get();
        $this->car_sector_id = $this->carsectormaster[0]->id;
       
    }


    public function getcars()
    {
        // return transportController::with(['cartypemaster', 'carsectormaster'])->get();
        return transportController::where('delete_status', 1)->search('carType', $this->car_type_id)->search('carSector', $this->car_sector_id)->get();
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.transport',['cars' => $this->getcars()]);
    }
}
