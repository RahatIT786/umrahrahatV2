<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\HotelDetail;

class ListHotalDetails extends Component
{
    use WithPagination;  
    public $search = null;
    public $hotelId;  
    public $showModal = false;

    public function confirmDelete($id)
    {
        $this->hotelId = $id;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function deleteData()
    {
        if ($this->hotelId) {
            $hotelDetails = HotelDetail::findOrFail($this->hotelId);
            $hotelDetails->update(['deleteStatus' => 2]);
            session()->flash('message', 'Visa details successfully marked as deleted.');
            $this->showModal = false;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $HotelDetails = HotelDetail::where('deleteStatus', 1)
        ->where(function($query){
            $query->where('hotelName', 'like', '%'.$this->search.'%')
                  ->orWhere('hotelPrice', 'like', '%'.$this->search.'%')
                  ->orWhere('hotelCity', 'like', '%'.$this->search.'%')
                  ->orWhere('hotelStarRating', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);
        
        return view('livewire.admin.components.list-hotal-details',['HotelDetails' => $HotelDetails]);
    }
}
