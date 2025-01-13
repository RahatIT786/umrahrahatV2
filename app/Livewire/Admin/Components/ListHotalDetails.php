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