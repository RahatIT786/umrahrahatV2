<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RoomsGuests extends Component
{

// below the code are add guest for room -start
public $rooms = [
    ['adults' => 1, 'children' => 0, 'childrenAges' => []]
];

public function addRoom()
{
    $this->rooms[] = ['adults' => 1, 'children' => 0, 'childrenAges' => []];
    $this->emitTotalGuests();
}

public function removeRoom($index)
{
    unset($this->rooms[$index]);
    $this->rooms = array_values($this->rooms); // Reset indexes
    $this->emitTotalGuests();
}

public function updateCount($index, $type, $change)
{
    if ($type === 'adults') {
        $this->rooms[$index]['adults'] = max(1, $this->rooms[$index]['adults'] + $change);
    } elseif ($type === 'children') {
        if ($change > 0) {
            $this->rooms[$index]['children']++;
            $this->rooms[$index]['childrenAges'][] = null;
        } else if ($this->rooms[$index]['children'] > 0) {
            $this->rooms[$index]['children']--;
            array_pop($this->rooms[$index]['childrenAges']);
        }
    }
    $this->emitTotalGuests();
}

public function getTotalGuestsProperty()
{
    return array_reduce($this->rooms, function ($total, $room) {
        return $total + $room['adults'] + $room['children'];
    }, 0);
    
}


// below the code are add guest for room -end


public function emitTotalGuests()
{
    $this->dispatch('totalGuestsUpdated', totalGuests:$this->getTotalGuestsProperty());
}




    public function render()
    {
        return view('livewire.components.rooms-guests');
    }
}
