<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;


class UserViewZiyarat extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.user-view-ziyarat');
    }
}
