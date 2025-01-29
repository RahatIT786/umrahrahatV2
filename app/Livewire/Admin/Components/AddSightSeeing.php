<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

class AddSightSeeing extends Component
{
    use WithFileUploads;
    
    public $sightId;
    public $sightName;
    public $sightPrice;
    public $currency;
    public $sightCity;
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
            $sight = HotelDetail::findOrFail( $id );
            $this->sightId = $sight->id;
            $this->sightName = $sight->sightName;
            $this->sightPrice =$sight->sightPrice;
            $this->currency = $sight->currency;
            $this->sightCity = $sight->sightCity;
            $this->sightDiscription = $sight->sightDiscription;
            $this->sightMainImagePath = $sight->sightMainImagePath;
            $this->sightImage1Path = $sight->sightImage1Path;
            $this->sightImage2Path = $sight->sightImage2Path;
            $this->sightImage3Path = $sight->sightImage3Path;
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
            $sight = HotelDetail::findOrFail($this->hotelId);
            $sight->update([
                'sightName' => $this->sightName,
                'sightPrice' => $this->sightPrice,
                'currency' => $this->currency,
                'sightCity' => $this->sightCity,
                'sightDiscription' => $this->sightDiscription,
                'sightMainImagePath' => $sightMainImagePath ?? $sight->hotelMainImage,
                'hotelImage1' => $hotelImage1Url ?? $hotel->hotelImage1,
                'hotelImage2' => $hotelImage2Url ?? $hotel->hotelImage2,
                'hotelImage3' => $hotelImage3Url ?? $hotel->hotelImage3,
                'hotelImage4' => $hotelImage4Url ?? $hotel->hotelImage4,
                'hotelImage5' => $hotelImage5Url ?? $hotel->hotelImage5,
                'deleteStatus' => $this->deleteStatus,
            ]);
            session()->flash('message', 'Hotel details updated successfully!');
        } else {
            // Create new hotel record
            HotelDetail::create([
                'hotelName' => $this->hotelName,
                'hotelPrice' => $this->hotelPrice,
                'currency' => $this->currency,
                'hotelCity' => $this->hotelCity,
                'hotelStarRating' => $this->hotelStarRating,
                'hotelAddress' => $this->hotelAddress,
                'hotelDiscription' => $this->hotelDiscription,
                'hotelCheckInTime' => $this->hotelCheckInTime,
                'hotelCheckOutTime' => $this->hotelCheckOutTime,
                'hotelDistance' => $this->hotelDistance,
                'hotelMainImage' => $hotelMainImageUrl,
                'hotelImage1' => $hotelImage1Url,
                'hotelImage2' => $hotelImage2Url,
                'hotelImage3' => $hotelImage3Url,
                'hotelImage4' => $hotelImage4Url,
                'hotelImage5' => $hotelImage5Url,
                'deleteStatus' => $this->deleteStatus, 
            ]);
            session()->flash('message', 'Hotel details added successfully!');
        }

        // Reset form fields
        $this->reset([
            'hotelName', 
            'hotelPrice',
            'currency', 
            'hotelCity', 
            'hotelStarRating', 
            'hotelAddress', 
            'hotelDiscription',
            'hotelCheckInTime',
            'hotelCheckOutTime',
            'hotelDistance',
            'hotelMainImage',
            'hotelImage1',
            'hotelImage2',
            'hotelImage3',
            'hotelImage4',
            'hotelImage5',
        ]);
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-sight-seeing');
    }
}
