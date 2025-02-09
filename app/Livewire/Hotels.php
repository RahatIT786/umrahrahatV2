<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HotelDetail;
use App\Models\HotelCities;
use Livewire\Attributes\Layout;
class Hotels extends Component
{
    public $hotel_detail;
    public $searchCity;
    public $searchRating;
    public $searchHotel;
    public $hotelCities;
    public $limit = 5; // Start with 10 hotels

    public function mount()
    {
        $this->hotelCities = HotelCities::where('delete_status', 1)->get();
    }

    public function loadMore()
    {
        $this->limit += 5; // Load 10 more hotels
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        $query = HotelDetail::where('deleteStatus', 1);

        if ($this->searchHotel) {
            $query->where('hotelName', 'like', '%' . $this->searchHotel . '%');
        }

        if ($this->searchCity) {
            $query->where('hotelCity', 'like', '%' . $this->searchCity . '%');
        }

        if ($this->searchRating) {
            $query->where('hotelStarRating', 'like', '%' . $this->searchRating . '%');
        }
        // Limit results based on the load more functionality
        $this->hotel_detail = $query->take($this->limit)->get();

        return view('livewire.user_front.hotels', ['hotelDetails' => $this->hotel_detail]);
    }
}
