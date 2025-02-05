<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\package_user_enquire;
use Livewire\WithPagination; 

class HotelEnquireyFromUser extends Component
{
    use WithPagination;
    
    

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.hotel-enquirey-from-user');
    }
}
