<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\ServiceType as serviceTypeModal;

class ServiceType extends Component
{
    use WithPagination;  
    public $showAddModal = false;
    public $showModal = false;
    public $service_type;
    public $ServiceTypeId;
    public $search = null;
    public function addCarType()
    {
        $this->showAddModal = true;
    }

    public function closeModal()
    {
        $this->showAddModal = false;
    }
    public function closeSaveModal(){
        $this->showAddModal = false;
    }
    public function closeDeleteModal(){
        $this->showModal = false;
    }
    public function save()
    {
        dd($this->service_type);
       
        serviceTypeModal::create([
                'service_type' => $this->service_type,
                'delete_status' => 1
            ]);
            session()->flash('message', 'Car Type details successfully added.');
            // $this->dispatch('carTypeSaved');
            $this->showAddModal = false;
    }
    public function confirmDelete($id)
    {
        $this->ServiceTypeId = $id;
        $this->showModal = true;
    }
    public function deleteData()
    {
        if ($this->ServiceTypeId) {
            $visaDetails = serviceTypeModal::findOrFail($this->ServiceTypeId);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Service Type details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.service-type');
    }
}
