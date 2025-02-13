<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MainHoliday;
use Livewire\Attributes\Layout;
use App\Models\HotelDetail;

class UserHolidaySingle extends Component
{
    public $HolidayDetails;
    public $HolidayId;
    public $Hotel_Ids;
    public $hotels;
    public function mount($id){
        $this->HolidayId = $id;
        $this->HolidayDetails = MainHoliday::find( $this->HolidayId);
        $this->hotels = $this->getHotels();
    }
    public function getHotels(){
        // Find the Ziyarat details based on the Ziyarat ID
        $this->HolidayDetails = MainHoliday::find($this->HolidayId);

        // Get the hotel IDs from the Ziyarat details and convert them to an array
        $this->Hotel_Ids = $this->HolidayDetails->hotelIds;
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
        return view('livewire.user_front.user-holiday-single');
    }
}
