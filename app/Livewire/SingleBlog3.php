<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class SingleBlog3 extends Component
{
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.single-blog3');
    }
}
