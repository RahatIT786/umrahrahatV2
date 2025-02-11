<?php

namespace App\Livewire\Admin\Components;

use App\Models\HotelDetail;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\HotelCities;
use App\Models\HotelCost;
use App\Models\CateringController;

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
    public $hotel_cities;

    public $hotelYouTube;
    public $hotelMap;
    public $hotelManagerContect;
    public $hotel_amenities = [];
    public $hotels = [];
    public $hotelSeasonStart = [];
    public $hotelSeasonEnd = [];
    public $hotelMeal = [];
    public $hotelDouble = [];
    public $hotelTriple = [];
    public $hotelQuad = [];
    public $hotelQuint = [];
    public $hotelAminity ;
    public $hotel_foods;

    protected $rules = [
        "hotelName"=> "required|string|max:150",
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
        'hotelYouTube' => 'nullable',
        'hotelMap' => 'nullable',
        'hotelManagerContect' => 'required',
    ];

    protected $messages = [
        'hotelName.required' => 'Hotel name is required.',
        'hotelName.string' => 'Hotel name must be a string.',
        'hotelName.max' => 'Hotel name cannot exceed 150 characters.',

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

        'hotelManagerContect' => 'Hotel Manager Contect Must be fill'
    ];

    public function mount($id = null){
        if($id){
            $hotel = HotelDetail::findOrFail( $id );
            $this->hotelId = $hotel->id;
            $this->hotelName = $hotel->hotelName;
            $this->hotelPrice = 'null';
            $this->currency = $hotel->currency;
            $this->hotelCity = $hotel->hotelCity;
            $this->hotelStarRating = $hotel->hotelStarRating;
            $this->hotelAddress = $hotel->hotelAddress;
            $this->hotelDiscription = $hotel->hotelDiscription;

            $this->hotelYouTube = $hotel->hotelYouTube;
            $this->hotelMap = $hotel->hotelMap;
            $this->hotelManagerContect = $hotel->hotelManagerContect;

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
        $this->hotel_cities = HotelCities::where('delete_status',1)->get();
        $this->hotel_foods = CateringController::where('delete_status',1)->get();
    }
    public function increaseHotelFields()
    {
        $this->hotels[] = [];
    }

    public function decreaseHotelFields()
    {
        if (count($this->hotels) > 1) {
            array_pop($this->hotels);  // Removes the last hotel object
        }
    }

    public function submit(){


        $this->hotelAminity = implode(',', $this->hotel_amenities);
        // dd($amenitiesString);

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
                'hotelPrice' => 0,
                'currency' => $this->currency,
                'hotelCity' => $this->hotelCity,
                'hotelStarRating' => $this->hotelStarRating,
                'hotelAddress' => $this->hotelAddress,
                'hotelDiscription' => $this->hotelDiscription,

                'hotelYouTube' => $this->hotelYouTube,
                'hotelMap' => $this->hotelMap,
                'hotelManagerContect' => $this->hotelManagerContect,

                'hotelCheckInTime' => $this->hotelCheckInTime,
                'hotelCheckOutTime' => $this->hotelCheckOutTime,
                'hotelDistance' => $this->hotelDistance,
                'hotel_amenities'=>$this->hotelAminity,

                'hotelMainImage' => $hotelMainImageUrl ?? $hotel->hotelMainImage,
                'hotelImage1' => $hotelImage1Url ?? $hotel->hotelImage1,
                'hotelImage2' => $hotelImage2Url ?? $hotel->hotelImage2,
                'hotelImage3' => $hotelImage3Url ?? $hotel->hotelImage3,
                'hotelImage4' => $hotelImage4Url ?? $hotel->hotelImage4,
                'hotelImage5' => $hotelImage5Url ?? $hotel->hotelImage5,
                'deleteStatus' => $this->deleteStatus,
            ]);
            foreach ($this->hotels as $key => $value) {

                $details_data[] = [
                    'hotel_id' => $hotel->id,
                    'hotelSeasonStart' => $this->hotelSeasonStart[$key] ?? null,
                    'hotelSeasonEnd' => $this->hotelSeasonEnd[$key] ?? null,
                    'hotelMeal' => $this->hotelMeal[$key] ?? null,
                    'hotelDouble' => $this->hotelDouble[$key] ?? null,
                    'hotelTriple' => $this->hotelTriple[$key] ?? null,
                    'hotelQuad' => $this->hotelQuad[$key] ?? null,
                    'hotelQuint' => $this->hotelQuint[$key] ?? null,
                ];
            }

            foreach ($details_data as $details) {

                HotelCost::create($details);
            }
            session()->flash('message', 'Hotel details updated successfully!');
        } else {
            // Create new hotel record
           $hotel = HotelDetail::create([
                'hotelName' => $this->hotelName,
                'hotelPrice' => 0,
                'currency' => $this->currency,
                'hotelCity' => $this->hotelCity,
                'hotelStarRating' => $this->hotelStarRating,
                'hotelAddress' => $this->hotelAddress,
                'hotelDiscription' => $this->hotelDiscription,
                'hotel_amenities'=>$this->hotelAminity,
                'hotelYouTube' => $this->hotelYouTube,
                'hotelMap' => $this->hotelMap,
                'hotelManagerContect' => $this->hotelManagerContect,

                'hotelCheckInTime' => $this->hotelCheckInTime,
                'hotelCheckOutTime' => $this->hotelCheckOutTime,
                'hotelDistance' => $this->hotelDistance,
                'hotelMainImage' => $hotelMainImageUrl ?? null,
                'hotelImage1' => $hotelImage1Url ?? null,
                'hotelImage2' => $hotelImage2Url ?? null,
                'hotelImage3' => $hotelImage3Url ?? null,
                'hotelImage4' => $hotelImage4Url ?? null,
                'hotelImage5' => $hotelImage5Url ?? null,
                'deleteStatus' => $this->deleteStatus,
            ]);

            foreach ($this->hotels as $key => $value) {

                $details_data[] = [
                    'hotel_id' => $hotel->id,
                    'hotelSeasonStart' => $this->hotelSeasonStart[$key] ?? null,
                    'hotelSeasonEnd' => $this->hotelSeasonEnd[$key] ?? null,
                    'hotelMeal' => $this->hotelMeal[$key] ?? null,
                    'hotelDouble' => $this->hotelDouble[$key] ?? null,
                    'hotelTriple' => $this->hotelTriple[$key] ?? null,
                    'hotelQuad' => $this->hotelQuad[$key] ?? null,
                    'hotelQuint' => $this->hotelQuint[$key] ?? null,
                ];
            }

            foreach ($details_data as $details) {

                HotelCost::create($details);
            }
            session()->flash('message', 'Hotel details added successfully!');
        }
        foreach ($this->hotels as $key => $value) {
            // Reset form fields for each hotel
            $this->reset([
                'hotelName',
                'currency',
                'hotelCity',
                'hotelStarRating',
                'hotelAddress',
                'hotelDiscription',
                'hotelYouTube',
                'hotelMap',
                'hotelManagerContect',
                'hotelCheckInTime',
                'hotelCheckOutTime',
                'hotelDistance',
                'hotelMainImage',
                'hotelImage1',
                'hotelImage2',
                'hotelImage3',
                'hotelImage4',
                'hotelImage5',
                'hotel_amenities'
            ]);

            // Reset array fields separately
            $this->hotelSeasonStart[$key] = null;
            $this->hotelSeasonEnd[$key] = null;
            $this->hotelMeal[$key] = null;
            $this->hotelDouble[$key] = null;
            $this->hotelTriple[$key] = null;
            $this->hotelQuad[$key] = null;
            $this->hotelQuint[$key] = null;
        }

        }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-hotal-detais');
    }
}
