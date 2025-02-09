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
    public $service_type_id, $showEditModal = false;
    public function addCarType()
    {
        $this->showAddModal = true;
    }

    public function closeSaveModal(){
        $this->showAddModal = false;
    }
    public function closeDeleteModal(){
        $this->showModal = false;
    }

    public function edit($id)
    { 
        //dd($id);
        $service = serviceTypeModal::findOrFail($id);
        $this->service_type_id = $service->id;
        $this->service_type = $service->service_type;
        $this->showEditModal = true;
    }
    public function update()
    {
        $this->validate([
            'service_type' => 'required|string|max:255',
        ]);

        $service = serviceTypeModal::findOrFail($this->service_type_id);
        $service->service_type = $this->service_type;
        $service->save();
        $this->showEditModal = false;
        session()->flash('message', 'Service Type updated successfully.');
    }
    public function closeModal()
    {
        $this->showAddModal = false;
        $this->showEditModal = false;
    }
    public function save()
    {
       // dd($this->service_type);
       
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
        $serviceTypes  = serviceTypeModal::where('delete_status',1)->paginate(10);
        return view('livewire.admin.components.service-type',['serviceTypes' => $serviceTypes]);
    }
}
