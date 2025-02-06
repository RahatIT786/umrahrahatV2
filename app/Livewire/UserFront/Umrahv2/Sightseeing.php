<?php

namespace App\Livewire\UserFront\Umrahv2;

use Livewire\Component;
use Livewire\Attributes\Layout; 
use App\Models\sightController;

class Sightseeing extends Component
{
    public $allSights;
    public $searchName;
    public $sightCity;
    public $limit = 4;
    public function loadMore()
    {
        $this->limit += 4; // Load 10 more hotels
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
                // Fetch all main packages with delete_status 1
                $query = sightController::where('delete_status', 1);
                if ($this->searchName) {
                    $query->where('sightName', 'like', '%' . $this->searchName . '%');
                }
                if ($this->sightCity) {
                    $query->where('sightCity', 'like', '%' . $this->sightCity . '%');
                }
                $this->allSights = $query->take($this->limit)->get();
        return view('livewire.user_front.umrahv2.sightseeing',['allSights'=>$this->allSights]);
    }
}
