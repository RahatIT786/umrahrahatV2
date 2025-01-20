<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\mainPackage;

class ListUmrahPackages extends Component
{
    public $showModal = false;
    public $packageId;
    public function confirmDelete($id)
    {
        $this->packageId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->packageId) {
            $flightDetails = mainPackage::findOrFail($this->packageId);
            $flightDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Package details successfully marked as deleted.');
            $this->showModal = false;
        }
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $packaheDetails = mainPackage::where('delete_status', 1)->get();
        return view('livewire.admin.components.list-umrah-packages',['packaheDetails' => $packaheDetails]);
    }
}
