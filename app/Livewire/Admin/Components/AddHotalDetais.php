<?php

namespace App\Livewire\Admin\Components;

use App\Models\HotelDetail;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AddHotalDetais extends Component
{
    use WithFileUploads;
    
    public $hotelId;
    public $hotelName;
    public $hotelPrice;
    public $currency;
    public $hotelCity;
    public $hotelStarRating;
    public $hotelAddress;
    public $hotelDiscription;
    public $hotelCheckInTime;
    public $hotelCheckOutTime;
    public $hotelDistance;
    public $hotelMainImage;
    public $hotelImage1;
    public $hotelMainImagePath;
    public $hotelImage1Path;
    public $hotelImage2Path;
    public $hotelImage3Path;
    public $hotelImage4Path;
    public $hotelImage5Path;
    public $hotelImage2;
    public $hotelImage3;
    public $hotelImage4;
    public $hotelImage5;
    public $deleteStatus = 1;

    protected $rules = [
        "hotelName"=> "required|string|max:150",
        "hotelPrice"=> "required|numeric",
        "currency"=> "required",
        "hotelCity"=> "required|string",
        "hotelStarRating"=> "required|string",
        "hotelAddress"=> "required|string|max:1000",
        "hotelDiscription"=> "required|string|max:1000",
        "hotelCheckInTime"=>"required",
        "hotelCheckOutTime"=> "required",
        "hotelDistance"=>"required|numeric",
        'hotelMainImage' => 'nullable|image|max:5120',
        'hotelImage1'=> 'nullable|image|max:5120',
        'hotelImage2'=> 'nullable|image|max:5120',
        'hotelImage3'=> 'nullable|image|max:5120',
        'hotelImage4'=> 'nullable|image|max:5120',
        'hotelImage5'=> 'nullable|image|max:5120',
    ];

    protected $messages = [
        'hotelName.required' => 'Hotel name is required.',
        'hotelName.string' => 'Hotel name must be a string.',
        'hotelName.max' => 'Hotel name cannot exceed 150 characters.',
        
        'hotelPrice.required' => 'Hotel price is required.',
        'hotelPrice.numeric' => 'Hotel price must be a numeric value.',
        
        'hotelCity.required' => 'Hotel city is required.',
        'hotelCity.string' => 'Hotel city must be a string.',
        
        'hotelStarRating.required' => 'Hotel star rating is required.',
        'hotelStarRating.string' => 'Hotel star rating must be a string.',
        
        'hotelAddress.required' => 'Hotel address is required.',
        'hotelAddress.string' => 'Hotel address must be a string.',
        'hotelAddress.max' => 'Hotel address cannot exceed 1000 characters.',
        
        'hotelDiscription.required' => 'Hotel description is required.',
        'hotelDiscription.string' => 'Hotel description must be a string.',
        'hotelDiscription.max' => 'Hotel description cannot exceed 1000 characters.',
        
        'hotelCheckInTime.required' => 'Hotel check-in time is required.',
        
        'hotelCheckOutTime.required' => 'Hotel check-out time is required.',

        'hotelDistance.required'=> 'Hotel Distance is required',
        'hotelDistance.numeric' => 'Hotel Distance must be a numeric value.',

        'hotelMainImage.image' => 'The hotel main image must be an image file.',
        'hotelMainImage.max' => 'The hotel main image size must not exceed 5MB.',
        
        'hotelImage1.image' => 'The hotel image 1 must be an image file.',
        'hotelImage1.max' => 'The hotel image 1 size must not exceed 5MB.',
        
        'hotelImage2.image' => 'The hotel image 2 must be an image file.',
        'hotelImage2.max' => 'The hotel image 2 size must not exceed 5MB.',
        
        'hotelImage3.image' => 'The hotel image 3 must be an image file.',
        'hotelImage3.max' => 'The hotel image 3 size must not exceed 5MB.',
        
        'hotelImage4.image' => 'The hotel image 4 must be an image file.',
        'hotelImage4.max' => 'The hotel image 4 size must not exceed 5MB.',
        
        'hotelImage5.image' => 'The hotel image 5 must be an image file.',
        'hotelImage5.max' => 'The hotel image 5 size must not exceed 5MB.',
    ];

    public function mount($id = null){
        if($id){
            $hotel = HotelDetail::findOrFail( $id );
            $this->hotelId = $hotel->id;
            $this->hotelName = $hotel->hotelName;
            $this->hotelPrice =$hotel->hotelPrice;
            $this->currency = $hotel->currency;
            $this->hotelCity = $hotel->hotelCity;
            $this->hotelStarRating = $hotel->hotelStarRating;
            $this->hotelAddress = $hotel->hotelAddress;
            $this->hotelDiscription = $hotel->hotelDiscription;
            $this->hotelCheckInTime = $hotel->hotelCheckInTime;
            $this->hotelCheckOutTime = $hotel->hotelCheckOutTime;
            $this->hotelDistance = $hotel->hotelDistance;
            $this->hotelMainImagePath = $hotel->hotelMainImage;
            $this->hotelImage1Path = $hotel->hotelImage1;
            $this->hotelImage2Path = $hotel->hotelImage2;
            $this->hotelImage3Path = $hotel->hotelImage3;
            $this->hotelImage4Path = $hotel->hotelImage4;
            $this->hotelImage5Path = $hotel->hotelImage5;
            
        }
    }

    public function submit(){
        $this->validate();

        // Store the images
        $hotelMainImagePath = $this->hotelMainImage ? $this->hotelMainImage->store('uploads', 'public') : null;
        $hotelImage1Path = $this->hotelImage1 ? $this->hotelImage1->store('uploads', 'public') : null;
        $hotelImage2Path = $this->hotelImage2 ? $this->hotelImage2->store('uploads', 'public') : null;
        $hotelImage3Path = $this->hotelImage3 ? $this->hotelImage3->store('uploads', 'public') : null;
        $hotelImage4Path = $this->hotelImage4 ? $this->hotelImage4->store('uploads', 'public') : null;
        $hotelImage5Path = $this->hotelImage5 ? $this->hotelImage5->store('uploads', 'public') : null;

        // Generate the full URL paths for the images
        $hotelMainImageUrl = $hotelMainImagePath ? Storage::url($hotelMainImagePath) : null;
        $hotelImage1Url = $hotelImage1Path ? Storage::url($hotelImage1Path) : null;
        $hotelImage2Url = $hotelImage2Path ? Storage::url($hotelImage2Path) : null;
        $hotelImage3Url = $hotelImage3Path ? Storage::url($hotelImage3Path) : null;
        $hotelImage4Url = $hotelImage4Path ? Storage::url($hotelImage4Path) : null;
        $hotelImage5Url = $hotelImage5Path ? Storage::url($hotelImage5Path) : null;

        if ($this->hotelId) {
            // Update existing hotel record
            $hotel = HotelDetail::findOrFail($this->hotelId);
            $hotel->update([
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
                'hotelMainImage' => $hotelMainImageUrl ?? $hotel->hotelMainImage,
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
        return view('livewire.admin.components.add-hotal-detais');
    }
}
