<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\transportController;

class CarRentel extends Component
{
    use WithPagination; 

    public $showModal = false;
    public $transportId;
    public $search = null;
    public function confirmDelete($id)
    {
        $this->transportId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->transportId) {
            $transportDetails = transportController::findOrFail($this->transportId);
            $transportDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Transport details  successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $transportDetails = transportController::with(['cartypemaster', 'carsectormaster'])->where('delete_status', 1)
        ->where(function($query){
            $query->where('carType', 'like', '%'.$this->search.'%')
                  ->orWhere('carSector', 'like', '%'.$this->search.'%')
                  ->orWhere('seatsCount', 'like', '%'.$this->search.'%')
                  ->orWhere('price', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        // dd($transportDetails );
        return view('livewire.admin.components.car-rentel',['transportDetails' => $transportDetails]);
    }
}
