<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\MainZiyarat;


class UserViewZiyarat extends Component
{
    public $ziyaratDetails;
    public $ziyaratId;
    public function mount($id){
        $this->ziyaratId = $id;
        $this->ziyaratDetails = MainZiyarat::where('service_type', $this->ziyaratId)->get();
    }
    
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.user-view-ziyarat');
    }
}
