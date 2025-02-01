<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\CarSector as carSectorAdd;

class CarSector extends Component
{
    use WithPagination;  
    public $showAddModal = false;
    public $showModal = false;
    public $car_sector;
    public $carTypeId;
    public $search = null;
    public function addCarType()
    {
        $this->showAddModal = true;
    }

    public function closeModal()
    {
        $this->showAddModal = false;
    }
    public function closeDeleteModal(){
        $this->showModal = false;
    }
    public function save()
    {
         $this->showAddModal = false;
         carSectorAdd::create([
                'car_sector' => $this->car_sector,
                'delete_status' => 1
            ]);
            session()->flash('message', 'Car Type details successfully added.');
    }
    public function confirmDelete($id)
    {
        $this->carTypeId = $id;
        $this->showModal = true;
    }
    public function deleteData()
    {
        if ($this->carTypeId) {
            $visaDetails = carSectorAdd::findOrFail($this->carTypeId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Car Sector details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $carSectors = carSectorAdd::where('delete_status', 1)
        ->where(function($query){
            $query->where('car_sector', 'like', '%'.$this->search.'%');
        })->paginate(10);
        return view('livewire.admin.components.car-sector',['carSectors'=>$carSectors]);
    }
}
