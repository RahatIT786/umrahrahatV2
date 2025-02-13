<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\HolidayCity;

class HolidayCities extends Component
{
    use WithPagination;
    public $showAddModal = false;
    public $showModal = false;
    public $Holiday_city;
    public $Holiday_city_id;
    public $search = null;
    public  $showEditModal = false;
    public function addZiyaratCity()
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
        $service = HolidayCity::findOrFail($id);
        $this->Holiday_city_id = $service->id;
        $this->Holiday_city = $service->Holiday_city;
        $this->showEditModal = true;
    }
    public function update()
    {
        $this->validate([
            'Holiday_city' => 'required|string|max:255',
        ]);

        $service = HolidayCity::findOrFail($this->Holiday_city_id);
        $service->Holiday_city = $this->Holiday_city;
        $service->save();
        $this->showEditModal = false;
        session()->flash('message', 'updated successfully.');
    }
    public function closeModal()
    {
        $this->showAddModal = false;
        $this->showEditModal = false;
    }
    public function save()
    {
       // dd($this->service_type);

       HolidayCity::create([
                'Holiday_city' => $this->Holiday_city,
                'delete_status' => 1
            ]);
            session()->flash('message', 'Holiday Cities successfully added.');
            // $this->dispatch('carTypeSaved');
            $this->showAddModal = false;
    }
    public function confirmDelete($id)
    {
        $this->Holiday_city_id = $id;
        $this->showModal = true;
    }
    public function deleteData()
    {
        if ($this->Holiday_city_id) {
            $visaDetails = HolidayCity::findOrFail($this->Holiday_city_id);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Holiday Cities successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $holidayCities  = HolidayCity::where('delete_status',1)
        ->where(function($query){
            $query->where('Holiday_city', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        return view('livewire.admin.components.holiday-cities',['holidayCities' => $holidayCities]);
    }
}
