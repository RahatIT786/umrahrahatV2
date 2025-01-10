<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\PackageRequest;
use App\Models\Package;

class UmrahByAir extends Component
{
    public $packages;
    public $browcherPopUp;
    public $browcherData;
    public $enquirePopUp;
    public $enquireData;
    public function mount(){
        $this->packages=$this->getAllPackage();

    }
    public function getAllPackage(){
        return Package::where('delete_status',false)->get();
    }
    public function openBrowcher($packageId){
        $this->browcherPopUp=true;
        $this->browcherData= Package::where('delete_status',false)->findOrFail($packageId);
    }
    public function closeBrowcher(){
        $this->browcherPopUp=false;
        $this->browcherData=null;
    }
    public function openEnquire($packageId){
        $this->enquirePopUp=true;
        $this->enquireData=Package::where('delete_status',false)->findOrFail($packageId);

    }
    public function closeEnquire(){
        $this->enquirePopUp=false;
        $this->enquireData=null;
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrah-by-air');
    }
}
