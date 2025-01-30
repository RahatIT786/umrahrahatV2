<?php

namespace App\Livewire\Admin\umrahv2;

use App\Jobs\CalculateWednesdaysJob;
use App\Models\Laundry;
use App\Models\Package;
use App\Models\UmrahEnquire;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListLaundry extends Component
{
    use WithFileUploads;

    public $showModal;
    public $laundryDetails;
    public $laundryId;

    private $delVal=2;

  
    public function mount(){

    $this->laundryDetails=Laundry::where('delete_status',1)->get();


    }


    public function confirmDelete($id){
        $this->showModal=true;
        $this->laundryId=$id;
    }
    public function closeModal(){
        $this->showModal=false;
    }
    public function deleteData(){
        if ($this->laundryId) {
            $delId = Laundry::find($this->laundryId);
    
            // if (!$delId) {
            //     dd('Laundry record not found!');
            // }
    
            $delId->update([
                'delete_status' => $this->delVal, // Ensure $this->delVal is defined properly
            ]);
            $this->mount();
    
            $this->showModal = false;
            // session()->flash('message', 'Record deleted successfully.');
        } else {
            // dd('No Laundry ID provided.');
        }
        
       

    }

    

   









   
    




















    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('admin.umrahv2.list-laundry');
    }
}
