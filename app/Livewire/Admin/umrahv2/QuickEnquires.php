<?php

namespace App\Livewire\Admin\umrahv2;


use App\Models\UmrahEnquire;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class QuickEnquires extends Component
{
    use WithFileUploads;
    public $quries;


    public function mount(){

    $this->quries=UmrahEnquire::where('delete_status',1)->get();


    }


































    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('admin.umrahv2.quick-enquire');
    }
}
