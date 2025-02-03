<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\HotelDetail;

class ViewHotelDetails extends Component
{
    public $hotelId;
    public $hotelName;
    public $hotelPrice;
    public $currency;
    public $hotelCity;
    public $hotelStarRating;
    public $hotelAddress;
    public $hotelDiscription;
    public $hotelCheckInTime;
    public $hotelCheckOutTime;
    public $hotelDistance;
    public $hotelMainImagePath;
    public $hotelImage1Path;
    public $hotelImage2Path;
    public $hotelImage3Path;
    public $hotelImage4Path;
    public $hotelImage5Path;
    public $hotelYouTube;
    public $hotelMap;
    public $hotelManagerContect;


    public function mount($id = null){
        if($id){
            $hotel = HotelDetail::findOrFail( $id );
            $this->hotelId = $hotel->id;
            $this->hotelName = $hotel->hotelName;
            $this->hotelPrice =$hotel->hotelPrice;
            $this->currency =$hotel->currency;
            $this->hotelCity = $hotel->hotelCity;
            $this->hotelStarRating = $hotel->hotelStarRating;
            $this->hotelAddress = $hotel->hotelAddress;
            $this->hotelDiscription = $hotel->hotelDiscription;
            $this->hotelYouTube = $hotel->hotelYouTube;
            $this->hotelMap = $hotel->hotelMap;
            $this->hotelManagerContect = $hotel->hotelManagerContect;
            $this->hotelCheckInTime = $hotel->hotelCheckInTime;
            $this->hotelCheckOutTime = $hotel->hotelCheckOutTime;
            $this->hotelDistance = $hotel->hotelDistance;
            $this->hotelMainImagePath = $hotel->hotelMainImage;
            $this->hotelImage1Path = $hotel->hotelImage1;
            $this->hotelImage2Path = $hotel->hotelImage2;
            $this->hotelImage3Path = $hotel->hotelImage3;
            $this->hotelImage4Path = $hotel->hotelImage4;
            $this->hotelImage5Path = $hotel->hotelImage5;
        }
    }
    
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.view-hotel-details');
    }
}
