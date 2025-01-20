<?php

namespace App\Livewire\UserFront\Dummy;

use Livewire\Component;
use Livewire\Attributes\Layout;

class UmrahPackageFromIndiaDummy extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.dummy.umrah-package-from-india-dummy');
    }
}
