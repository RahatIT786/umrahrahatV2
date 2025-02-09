<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MainZiyarat;
use Livewire\Attributes\Layout;
use App\Models\HotelDetail;

class ZiyaratSingleView extends Component
{
    public $ziyaratDetails;
    public $ziyaratId;
    public $Hotel_Ids;
    public $hotels;
    public function mount($id){
        $this->ziyaratId = $id;
        $this->ziyaratDetails = MainZiyarat::find( $this->ziyaratId);
        $this->hotels = $this->getHotels();
    }
    public function getHotels(){
        // Find the Ziyarat details based on the Ziyarat ID
        $this->ziyaratDetails = MainZiyarat::find($this->ziyaratId);
    
        // Get the hotel IDs from the Ziyarat details and convert them to an array
        $this->Hotel_Ids = $this->ziyaratDetails->hotelIds;
        $hotels = explode(",", $this->Hotel_Ids);
    
        // Fetch the hotel details based on the hotel IDs
        $hotelDetails = HotelDetail::whereIn('id', $hotels)->get();
    
        // Store the hotel details in an array for use on the user side
        $hotelData = [];
        foreach ($hotelDetails as $hotel) {
            $hotelData[] = $hotel->toArray();
        }
        return $hotelData;
    }

    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.ziyarat-single-view');
    }
}
