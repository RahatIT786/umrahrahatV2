<?php

namespace App\Livewire;

use App\Models\Package;
use App\Models\PackageRequest;
use Livewire\Component;
use Livewire\Attributes\Layout;


   

class UserHome extends Component
{

    public $browcherPopUp;

    public $enquirePopUp;

    public $packages;

    public $browcherData;

    public $enquireData;



    public $customerName;
    public $mobile;
    public $query;
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


    
    public function packageEnquirySubmitForm(){
        // dd(
        //     $this->customerName,
        //     $this->cutomerMobile,
        //     $this->customerChoosenPackage,
        // );
        PackageRequest::create([
            'customer_name'=>$this->customerName,
            'mobile'=>$this->mobile,
            'package_name'=>$this->enquireData->package_name,
            'query'=>$this->query,

        ]);

        $this->enquirePopUp=false;
    }

    

















    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.user-home');
    }
}
