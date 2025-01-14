<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\HotelDetail;

class HotelSingleDetail extends Component
{
    public $hotel_detail;
    public $hotel_id;

    public function mount($id) 
    {
        // Get the hotel detail by ID
  
        $this->hotel_id = $id;
        $this->hotel_detail = HotelDetail::find($this->hotel_id);
    }

    #[Layout('user.Layouts.app')]
    public function render()
    {
        // Pass the hotel_detail variable to the view
        return view('livewire.user_front.hotel-single-detail');
    }
}
