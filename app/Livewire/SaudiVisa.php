<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\userVisaEnquiry;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\VisaDetail;

class SaudiVisa extends Component
{
    use HasFactory;
  
    public $name;
    public $phone;
    public $message;
    public $visaDetails;
    public $getVisaType;
    public $data;
    public $visaType;
    public $browcherPopUp;
    public $enquirePopUp;
    public $browcherData;
    public $enquireData;
    public $searchVisaType;
    public $searchCountry;
    public $showModal = false;
    // public function mount(){
    //     $this->visaDetails = VisaDetail::where('delete_status', 1)->get();
    // }
    public function UserRequestVisaType($id)
    {
        $this->getVisaType = VisaDetail::find($id);
        if ($this->getVisaType) {
            $this->visaType = $this->getVisaType->visa_type;
        } else {
            $this->visaType = 'Royal'; // Default value if no visa type is found
        }
        $this->showModal = true; // Show the modal
    }
    
    public function closeModal()
    {
        $this->showModal = false; // Close the modal
    }
    public function openBrowcher($packageId){
        //dump($packageId);
        $this->browcherPopUp=true;
        $this->browcherData= VisaDetail::where('delete_status',1)->findOrFail($packageId);
    }
    public function closeBrowcher(){
        $this->browcherPopUp=false;
        $this->browcherData=null;
    }
    public function openEnquire($packageId){
        //dump($packageId);
        $this->enquirePopUp=true;
        $this->enquireData=VisaDetail::where('delete_status',1)->findOrFail($packageId);
        //dump($this->enquireData);

    }
    public function closeEnquire(){
        $this->enquirePopUp=false;
        $this->enquireData=null;
    }
    protected $rules = [
        'name'=> 'required|string',
        'phone'=> 'required|numeric',
        'visaType' => 'required|string',
    ];

    public function uservisaEnquiry(){
    
        // Create the enquiry
        $this->data = userVisaEnquiry::create([
            'name'=> $this->name,
            'phone'=> $this->phone,
            'message'=> $this->message,
            'visaType' => $this->enquireData->visa_type,
            'delete_status' => 1,
            'status' => 1,
        ]);
        $this->enquirePopUp=false;
    
        // Check if data is correctly created
        //Log::info('Enquiry created:', $this->data->toArray());
    
        // Display flash message and reset fields
        session()->flash('message', 'Your Visa Enquiry Send Successfully!');
        $this->reset(['name','phone','message']);
    }
    
    #[Layout('user.Layouts.app')]

    public function render()
    {
        $query = VisaDetail::where('delete_status', 1);

        // Apply search filters only if they have values
        if ($this->searchVisaType) {
            $query->where('visa_type', 'like', '%' . $this->searchVisaType . '%');
        }

        if ($this->searchCountry) {
            $query->where('country', 'like', '%' . $this->searchCountry . '%');
        }

        // Execute the query and get the results
        $this->visaDetails = $query->get();

        return view('livewire.user_front.saudi-visa',['visaDetails' => $this->visaDetails]);
    }
}
