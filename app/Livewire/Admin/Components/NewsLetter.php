<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination; 
use App\Models\Newsletter as NewsletterModal;

class NewsLetter extends Component
{
    use WithPagination; 
    public $search = null;
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        $Newsletters = NewsletterModal::where(function($query){
            $query->where('email', 'like', '%'.$this->search.'%');
       })
       ->paginate(10);
            
        return view('livewire.admin.components.news-letter',['Newsletters'=>$Newsletters]);
    }
}
