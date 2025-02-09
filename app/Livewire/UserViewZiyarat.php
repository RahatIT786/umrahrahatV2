<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\MainZiyarat;


class UserViewZiyarat extends Component
{
    public $ziyaratDetails;
    public $ziyaratId;
    public $search;
    public function mount($id){
        $this->ziyaratId = $id;
        $this->ziyaratDetails = MainZiyarat::where('service_type', $this->ziyaratId)->get();
    }
    
    #[Layout('user.Layouts.app')]
    public function render()
    {
        $query = MainZiyarat::where('delete_status', 1)->where('service_type', $this->ziyaratId);

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Limit results based on the load more functionality
        $this->ziyaratDetails = $query->get();
        return view('livewire.user_front.user-view-ziyarat',['ziyaratDetails'=>$this->ziyaratDetails]);
    }
}
