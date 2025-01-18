<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\DepartureCity as City;
class DepartureCity extends Component
{
    public $showModal = false;
    public $CityId;
    public function confirmDelete($id)
    {
        $this->CityId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->CityId) {
            $DepartureCityDetails = City::findOrFail($this->CityId);
            $DepartureCityDetails->update(['delete_status' => false]);
            session()->flash('message', 'City details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $CityDetails = City::where('delete_status', true)->get();
        return view('livewire.admin.components.departure-city',['CityDetails' => $CityDetails]);
    }
}
