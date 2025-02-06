<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\sightController;

class AddSightSeeing extends Component
{
    use WithFileUploads;
    
    public $sightId;
    public $sightName;
    public $sightPrice;
    public $sightPrice1;
    public $currency;
    public $sightCity;
    public $sightInclusion;
    public $sightNotes;
    public $sightDiscription;
    public $sightMainImage;
    public $sightImage1;
    public $sightImage2;
    public $sightImage3;
    public $sightMainImagePath;
    public $sightImage1Path;
    public $sightImage2Path;
    public $sightImage3Path;
    public $deleteStatus = 1;

    protected $rules = [
        "sightName"=> "required|string|max:500",
        "sightPrice"=> "required|numeric",
        'sightPrice1' => "required|numeric",
        "currency"=> "required",
        "sightCity"=> "required|string",
        "sightDiscription"=> "required|string",
        'sightMainImage' => 'nullable|image|max:5120',
        'sightImage1'=> 'nullable|image|max:5120',
        'sightImage2'=> 'nullable|image|max:5120',
        'sightImage3'=> 'nullable|image|max:5120',
    ];

    protected $messages = [
        'sightName.required' => 'sight name  is required.',
        'sightName.string' => 'sight name must be a string.',
        'sightName.max' => 'sight name cannot exceed 550 characters.',
        
        'sightPrice.required' => 'sight price is required.',
        'sightPrice.numeric' => 'sight price must be a numeric value.',

        'sightPrice1.required' => 'sight price is required.',
        'sightPrice1.numeric' => 'sight price must be a numeric value.',
        
        'sightCity.required' => 'sight city is required.',
        'sightCity.string' => 'sight city must be a string.',
        
        'sightDiscription.required' => 'sight description is required.',
        'sightDiscription.string' => 'sight description must be a string.',
        'sightDiscription.max' => 'sight description cannot exceed 1000 characters.',

        'sightMainImage.image' => 'The Sight main image must be an image file.',
        'sightMainImage.max' => 'The Sight main image size must not exceed 5MB.',
        
        'sightImage1.image' => 'The Sight image 1 must be an image file.',
        'sightImage1.max' => 'The Sight image 1 size must not exceed 5MB.',
        
        'sightImage2.image' => 'The Sight image 2 must be an image file.',
        'sightImage2.max' => 'The Sight image 2 size must not exceed 5MB.',
        
        'sightImage3.image' => 'The Sight image 3 must be an image file.',
        'sightImage3.max' => 'The Sight image 3 size must not exceed 5MB.',
    ];

    public function mount($id = null){
        if($id){
            $sight = sightController::findOrFail( $id );
            $this->sightId = $sight->id;
            $this->sightName = $sight->sightName;
            $this->sightPrice =$sight->sightPrice;
            $this->sightPrice1 = $sight->sightPrice1;
            $this->currency = $sight->currency;
            $this->sightCity = $sight->sightCity;
            $this->sightDiscription = $sight->sightDiscription;
            $this->sightInclusion = $sight->sightInclusion;
            $this->sightNotes = $sight->sightNotes;
            $this->sightMainImagePath = $sight->sightMainImage;
            $this->sightImage1Path = $sight->sightImage1;
            $this->sightImage2Path = $sight->sightImage2;
            $this->sightImage3Path = $sight->sightImage3;
        }
    }

    public function submit(){
        $this->validate();

        // Store the images
        $sightMainImagePath = $this->sightMainImage ? $this->sightMainImage->store('uploads', 'public') : null;
        $sightImage1Path = $this->sightImage1 ? $this->sightImage1->store('uploads', 'public') : null;
        $sightImage2Path = $this->sightImage2 ? $this->sightImage2->store('uploads', 'public') : null;
        $sightImage3Path = $this->sightImage3 ? $this->sightImage3->store('uploads', 'public') : null;


        // Generate the full URL paths for the images

        if ($this->sightId) {
            // Update existing hotel record
            $sight = sightController::findOrFail($this->sightId);
            $sight->update([
                'sightName' => $this->sightName,
                'sightPrice' => $this->sightPrice,
                'sightPrice1' => $this->sightPrice1,
                'currency' => $this->currency,
                'sightCity' => $this->sightCity,
                'sightDiscription' => $this->sightDiscription,
                'sightInclusion' => $this->sightInclusion,
                'sightNotes' => $this->sightNotes,
                'sightMainImage' => $sightMainImagePath ?? $sight->sightMainImage,
                'sightImage1' => $sightImage1Path ?? $sight->sightImage1,
                'sightImage2' => $sightImage2Path ?? $sight->sightImage2,
                'sightImage3' => $sightImage3Path ?? $sight->sightImage3,
                'deleteStatus' => $this->deleteStatus,
            ]);
            session()->flash('message', 'Sight details updated successfully!');
        } else {
            // Create new hotel record
            sightController::create([
                'sightName' => $this->sightName,
                'sightPrice' => $this->sightPrice,
                'sightPrice1' => $this->sightPrice1,
                'currency' => $this->currency,
                'sightCity' => $this->sightCity,
                'sightDiscription' => $this->sightDiscription,
                'sightInclusion' => $this->sightInclusion ?? '',
                'sightNotes' => $this->sightNotes ?? '',
                'sightMainImage' => $sightMainImagePath,
                'sightImage1' => $sightImage1Path,
                'sightImage2' => $sightImage2Path,
                'sightImage3' => $sightImage3Path,
                'deleteStatus' => $this->deleteStatus, 
            ]);
            session()->flash('message', 'Sight details added successfully!');
        }

        // Reset form fields
        $this->reset([
            'sightName', 
            'sightPrice',
            'sightPrice1',
            'currency', 
            'sightCity', 
            'sightDiscription', 
            'sightInclusion',
            'sightNotes',
            'sightMainImage', 
            'sightImage1',
            'sightImage2',
            'sightImage3',
            'sightMainImagePath',
            'sightImage1Path',
            'sightImage2Path',
            'sightImage3Path'
        ]);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-sight-seeing');
    }
}
