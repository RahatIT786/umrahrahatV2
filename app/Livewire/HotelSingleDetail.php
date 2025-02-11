<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\HotelDetail;
use App\Models\hotel_user_enquire;
use App\Models\HotelCost;

class HotelSingleDetail extends Component
{
    public $hotel_detail;
    public $hotel_id;
    public $HotelDetails;
    public $hotelCostDatas;

            //==========================================================================//
            public $package_user_name;
            public $package_user_email;
            public $package_user_phone;
            public $package_user_adult;
            public $package_user_child;
            public $package_user_hotel_name;


            public function packageEnquire(){
              hotel_user_enquire::create([
                    'package_user_name' => $this->package_user_name,
                    'package_user_email' => $this->package_user_email,
                    'package_user_phone' => $this->package_user_phone,
                    'package_user_adult' => $this->package_user_adult,
                    'package_user_child' => $this->package_user_child,
                    'package_user_hotel_name' => $this->package_user_hotel_name ?? '',
                ]);

                session()->flash('success', 'Your enquiry has been submitted successfully!');
                $this->reset(['package_user_name','package_user_email','package_user_phone', 'package_user_adult', 'package_user_child']);
            }
            //==========================================================================//

    public function mount($id)
    {
        // Get the hotel detail by ID

        $this->hotel_id = $id;
        $this->hotel_detail = HotelDetail::find($this->hotel_id);
        $this->package_user_hotel_name = $this->hotel_detail->hotelName;
        $this->hotelCostDatas = $this->getPeriods();

    }
    public function getPeriods(){
        // Fetch the hotel details based on the hotel IDs
        $hotelCosts = HotelCost::where('hotel_id', $this->hotel_id )->get();
        // Store the hotel details in an array for use on the user side
        //dd($hotelCosts);
        $hotelCostData = [];
        foreach ($hotelCosts as $hotel) {
            $hotelCostData[] = $hotel->toArray();
        }
        return $hotelCostData;
    }


    #[Layout('user.Layouts.app')]
    public function render()
    {
        // Pass the hotel_detail variable to the view
        return view('livewire.user_front.hotel-single-detail');
    }
}
