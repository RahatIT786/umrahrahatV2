<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Newsletter as NewsletterModal;

class NewsLetter extends Component
{
    public $email;
    public function submit(){
        NewsletterModal::create([
            'email' => $this->email,
        ]);
        session()->flash('message', 'Visa details added successfully!');
        $this->reset(['email']);
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.news-letter');
    }
}
