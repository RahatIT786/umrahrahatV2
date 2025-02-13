<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\MainHoliday;

class UserViewHoliday extends Component
{
    public $HolidayDetails;
    public $HolidayId;
    public $search;
    public function mount($id){
        $this->HolidayId = $id;
        $this->HolidayDetails = MainHoliday::where('service_type', $this->HolidayId)->get();
    }

    #[Layout('user.Layouts.app')]
    public function render()
    {
        $query = MainHoliday::where('delete_status', 1)->where('service_type', $this->HolidayId);

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Limit results based on the load more functionality
        $this->HolidayDetails = $query->get();
        return view('livewire.user_front.user-view-holiday',['HolidayDetails'=> $this->HolidayDetails]);
    }
}
