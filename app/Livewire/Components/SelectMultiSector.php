<?php

namespace App\Livewire\Components;

use App\Models\CarSector;
use Livewire\Component;

class SelectMultiSector extends Component
{

    public $selectedSectors = []; // Array to store selected sectors
    public $carSector; // List of sectors

    public function mount(){
        $this->carSector=CarSector::where('delete_status',1)->get();
    }



    public function updatedSelectedSectors()
    {
        // Debugging
        logger($this->selectedSectors);
    }




    public function render()
    {
        return view('livewire.components.select-multi-sector');
    }
}
