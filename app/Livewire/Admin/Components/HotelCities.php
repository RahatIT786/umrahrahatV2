<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithPagination; 
use Livewire\Attributes\Layout;
use App\Models\HotelCities as HotelCitiesModal;

class HotelCities extends Component
{
    use WithPagination;  
    public $showAddModal = false;
    public $showModal = false;
    public $hotel_city;
    public $hotel_City_id;
    public $search = null;
    public  $showEditModal = false;
    public function addHotelCity()
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
        $service = HotelCitiesModal::findOrFail($id);
        $this->hotel_City_id = $service->id;
        $this->hotel_city = $service->hotel_city;
        $this->showEditModal = true;
    }
    public function update()
    {
        $this->validate([
            'hotel_city' => 'required|string|max:255',
        ]);

        $service = HotelCitiesModal::findOrFail($this->hotel_City_id);
        $service->hotel_city = $this->hotel_city;
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
       
       HotelCitiesModal::create([
                'hotel_city' => $this->hotel_city,
                'delete_status' => 1
            ]);
            session()->flash('message', 'Hotel Cities successfully added.');
            // $this->dispatch('carTypeSaved');
            $this->showAddModal = false;
    }
    public function confirmDelete($id)
    {
        $this->hotel_City_id = $id;
        $this->showModal = true;
    }
    public function deleteData()
    {
        if ($this->hotel_City_id) {
            $visaDetails = HotelCitiesModal::findOrFail($this->hotel_City_id);
            $visaDetails->update(['delete_status' => 2]);
            session()->flash('message', 'Hotel Cities successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $hotelCities  = HotelCitiesModal::where('delete_status',1)->paginate(10);
        return view('livewire.admin.components.hotel-cities',['hotelCities' => $hotelCities]);
    }
}
