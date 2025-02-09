<?php

namespace App\Livewire;

use App\Models\Package;
use App\Models\PackageRequest;
use App\Models\UmrahEnquire;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\mainPackage as MainPackage;


   

class UserHome extends Component
{
    public $allPackages;
    public $inclusions;
    public $departCities;
    public $selectedCity;
    public $allCities;
    public $searchCity;
    public $searchDays;
    public $packageDays;

    public $browcherPopUp;

    public $enquirePopUp;

    public $packages;

    public $browcherData;

    public $enquireData;
    public $customerName;
    public $mobile;
    public $query;

     //for enquire form variables
     public $umrahEmquire;

     //popup form variable 
     public $name;
     public $qmobile;
     public $date_of_travel;
     public $total_pax;
     public $travel_type;
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


    public function umrahEnquirePopupClose(){
        $this->umrahEmquire=false;
    }

    public function quickEnquireSumbit(){

        // $this->validate();
       UmrahEnquire::create([
        'name' => $this->name,
        'mobile' => $this->qmobile,
        'date_of_travel' => $this->date_of_travel,
        'total_pax' => $this->total_pax,
        'travel_type' => $this->travel_type,
    ]);
    
    $this->umrahEmquire=false;
    session()->flash('success', 'Your enquiry has been submitted successfully!');
    }

    

















    #[Layout('user.Layouts.app')]
    public function render()
    {

                // Fetch all main packages with delete_status 1
                $query = MainPackage::where('delete_status', 1)
                ->where('service_type',strtolower(__('message.umrah')))
                        ->where('departure_type',strtolower(__('message.bus')));
            
                if ($this->searchCity) {
                    $query->where('depart_city', 'like', '%' . $this->searchCity . '%');
                }
                
                if ($this->searchDays) {
                    $query->where('package_days', 'like', '%' . $this->searchDays . '%');
                }
                $this->allPackages = $query->get();
        return view('livewire.user_front.user-home',['allPackages' => $this->allPackages]);
    }
}
