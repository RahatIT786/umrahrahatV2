<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\sightController;

class ListSightSeeing extends Component
{
    use WithPagination;  
    public $search = null;
    public $sightId;  
    public $showModal = false;
    public function confirmDelete($id)
    {
        $this->sightId  = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
    public function deleteData()
    {
        if ($this->sightId) {
            $SightDetails = sightController::findOrFail($this->sightId);
            $SightDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Sight details successfully deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $SightDetails = sightController::where('delete_status', 1)
        ->where(function($query){
            $query->where('sightName', 'like', '%'.$this->search.'%')
                  ->orWhere('sightPrice', 'like', '%'.$this->search.'%')
                  ->orWhere('sightCity', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        return view('livewire.admin.components.list-sight-seeing',['sightDetail' => $SightDetails]);
    }
}
