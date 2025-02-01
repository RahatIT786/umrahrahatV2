<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\CarType as carTypeAdd;
use Livewire\WithPagination; 

class CarType extends Component
{
    use WithPagination;  
    public $showAddModal = false;
    public $showModal = false;
    public $carType;
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
          carTypeAdd::create([
                'car_type' => $this->carType,
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
            $visaDetails = carTypeAdd::findOrFail($this->carTypeId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Car Type details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $cartypes = carTypeAdd::where('delete_status', 1)
        ->where(function($query){
            $query->where('car_type', 'like', '%'.$this->search.'%');
        })->paginate(10);

        //dd($cartypes);
        return view('livewire.admin.components.car-type',['cartypes' =>  $cartypes]);
    }
}
