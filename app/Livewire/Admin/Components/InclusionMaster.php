<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\inclusion;
class InclusionMaster extends Component
{
    public $showModal = false;
    public $InclusionId;
    public function confirmDelete($id)
    {
        $this->InclusionId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->InclusionId) {
            $flightDetails = inclusion::findOrFail($this->InclusionId);
            $flightDetails->update(['delete_status' => false]);
            session()->flash('message', 'Inclusion  Added successfully marked as deleted.');
            $this->showModal = false;
        }
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $AllInclusion = inclusion::where('delete_status', true)->get();
        return view('livewire.admin.components.inclusion-master',['AllInclusion' => $AllInclusion]);
    }
}
