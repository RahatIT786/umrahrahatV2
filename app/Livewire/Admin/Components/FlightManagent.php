<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\FlightManagement;

class FlightManagent extends Component
{
    public $showModal = false;
    public $flightId;
    public function confirmDelete($id)
    {
        $this->flightId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->flightId) {
            $flightDetails = FlightManagement::findOrFail($this->flightId);
            $flightDetails->update(['delete_status' => false]);
            session()->flash('message', 'Visa details successfully marked as deleted.');
            $this->showModal = false;
        }
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $flightDetails = FlightManagement::where('delete_status', true)->get();
        return view('livewire.admin.components.flight-managent',['flightDetails'=> $flightDetails]);
    }
}
