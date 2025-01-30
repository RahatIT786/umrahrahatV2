<?php

namespace App\Livewire\Admin\umrahv2;

use App\Jobs\CalculateWednesdaysJob;
use App\Models\Package;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\AgentSignUp as SignUp;
use App\Models\Laundry as ModelsLaundry;
use Illuminate\Support\Facades\Log;

class Laundry extends Component
{
    use WithFileUploads;

    public $laundryId;

    public $laundry_type;
    public $day;
    public $price;
    public $cloth_count;
    public $note;
    public $description;
    public $image;
    public $selectedOrderId; 
    public $laundryTypes=[
        'Gold',
        'Silver',
        'Bronze',
    ];

    public $days=[
        '2 days One Laundry',
        'Daily Laundry'
    ];
    public $cloths=[
        'One Set Of Cloth',
        'Unlimited Cloths',
    ];

    public $defaultNotes='<strong>Free Pickup & Drop:</strong> Convenient pickup and delivery at your hotel in Makkah or Madinah. <br>
<strong>Complimentary Ironing: </strong> Your clothes will be returned ironed and ready to wear. <br>
<strong>Quick Turnaround:</strong> Your freshly cleaned clothes will be delivered within 24 hours, neatly wrapped in plastic.';

    public $defaultDescription='Convenient Laundry Service in Makkah and Madinah
Rahat Group is pleased to offer premium laundry services for your Hajj & Umrah groups or family in Makkah and Madinah. Enjoy hassle-free cleaning with the following features:';



    protected $rules = [
        'laundry_type' => 'required|string',
        'day' => 'required|string',
        'price' => 'required|integer',
        'cloth_count' => 'required|string',
        'image'=>'required',
       
        
    ];
  
    
    public function mount(){

        $this->laundryTypes;
        $this->days;
        $this->cloths;
        $this->defaultNotes;
        $this->defaultDescription;

    // $this->agentSignUps=SignUp::where('delete_status',1)->get();

    }

    // public function updatedDay($value)
    // {
    //     dd($value);
    //     // Log the selected value to check if the update is working
    //     \Log::info('Selected Day:', [$value]);
    // }

    public function updatedDefaultNotes($value){
        dd($value);
        // = trim($value);
        $this->defaultNotes  = strip_tags($value); 

    }



    public function saveLaundryDetails(){
        $this->validate();
        // dd([
        //     'laundry_type' => $this->laundry_type,
        //     'days' => $this->day,
        //     'price' => $this->price,
        //     'cloth_count' => $this->cloth_count,
        //     'note' => $this->defaultNotes,
        //     'description' => $this->defaultDescription,
        //     // 'image' => $imagePath,
        // ]);
       

       
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('laundry_images', 'public');
        }


        if($this->laundryId){
           $landry= ModelsLaundry::findOrFail($this->selectedOrderId);
            $landry->update([
                'laundry_type' => $this->laundry_type,
                'days' => $this->days,
                'price' => $this->price,
                'cloth_count' => $this->cloth_count,
                'note' => $this->defaultNotes,
                'description' => $this->defaultDescription,
                'image_path' => $imagePath,
            ]);
            session()->flash('message', 'Laundry Order Updated Successfully');
            $this->reset();
           

        }
        else{
          $addLaundry=  ModelsLaundry::create([
                'laundry_type' => $this->laundry_type,
                'days' => $this->day,
                'price' => $this->price,

                'cloth_count' => $this->cloth_count,
                'note' => $this->defaultNotes,
                'description' => $this->defaultDescription,
                'image_path' => $imagePath,

            ]);
            session()->flash('message', 'Laundry Order Created Successfully');
            $this->reset(); 
           

        }
    }
   









   
    




















    #[Layout('admin.Layouts.app')]
    public function render()
    {
        // $this->emit('setSummernoteContent', $this->defaultNotes);
        // dd($this->laundry_type);
        return view('admin.umrahv2.add-laundry');
    }
}
