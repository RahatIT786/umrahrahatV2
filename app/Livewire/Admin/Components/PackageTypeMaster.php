<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\PackageType;

class PackageTypeMaster extends Component
{
    public $showModal = false;
    public $PackageTypeId;
    public function confirmDelete($id)
    {
        $this->PackageTypeId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->PackageTypeId) {
            $flightDetails = PackageType::findOrFail($this->PackageTypeId);
            $flightDetails->update(['delete_status' => false]);
            session()->flash('message', 'Package type details successfully marked as deleted.');
            $this->showModal = false;
        }
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $PackageTypes = PackageType::where('delete_status', true)->get();
        return view('livewire.admin.components.package-type-master',['PackageTypes'=>$PackageTypes]);
    }
}
