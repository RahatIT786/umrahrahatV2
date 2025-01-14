<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\HotelDetail;
class Hotels extends Component
{
    public $hotel_detail;
    public $searchCity;
    public $searchRating;
    public $searchHotel;
    #[Layout('user.Layouts.app')]
    public function render()
    {
        $query = HotelDetail::where('deleteStatus', 1);

        // Apply search filters only if they have values
        if ($this->searchHotel) {
            $query->where('hotelName', 'like', '%' . $this->searchHotel . '%');
        }

        if ($this->searchCity) {
            $query->where('hotelCity', 'like', '%' . $this->searchCity . '%');
        }

        if ($this->searchRating) {
            $query->where('hotelStarRating', 'like', '%' . $this->searchRating . '%');
        }

        // Execute the query and get the results
        $this->hotel_detail = $query->get();

        return view('livewire.user_front.hotels',['hotelDetails'=> $this->hotel_detail]);
    }
}
