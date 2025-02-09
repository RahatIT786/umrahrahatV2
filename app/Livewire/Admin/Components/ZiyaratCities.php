<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithPagination; 
use Livewire\Attributes\Layout;
use App\Models\ZiyaratCity;

class ZiyaratCities extends Component
{
    use WithPagination;  
    public $showAddModal = false;
    public $showModal = false;
    public $ziyarat_city;
    public $ziyarat_city_id;
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
        $service = ZiyaratCity::findOrFail($id);
        $this->ziyarat_city_id = $service->id;
        $this->ziyarat_city = $service->ziyarat_city;
        $this->showEditModal = true;
    }
    public function update()
    {
        $this->validate([
            'ziyarat_city' => 'required|string|max:255',
        ]);

        $service = ZiyaratCity::findOrFail($this->ziyarat_city_id);
        $service->ziyarat_city = $this->ziyarat_city;
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
       
       ZiyaratCity::create([
                'ziyarat_city' => $this->ziyarat_city,
                'delete_status' => 1
            ]);
            session()->flash('message', 'ziyarat Cities successfully added.');
            // $this->dispatch('carTypeSaved');
            $this->showAddModal = false;
    }
    public function confirmDelete($id)
    {
        $this->ziyarat_city_id = $id;
        $this->showModal = true;
    }
    public function deleteData()
    {
        if ($this->ziyarat_city_id) {
            $visaDetails = ZiyaratCity::findOrFail($this->ziyarat_city_id);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'ziyarat Cities successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $ziyaratCities  = ZiyaratCity::where('delete_status',1)
        ->where(function($query){
            $query->where('ziyarat_city', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        return view('livewire.admin.components.ziyarat-cities',['ziyaratCities' => $ziyaratCities]);
    }
}


