<?php

namespace App\Livewire\UserFront\Dummy;

use Livewire\Component;
use Livewire\Attributes\Layout;

class RamzanPackageFromIndiaDummy extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.dummy.ramzan-package-from-india-dummy');
    }
}
