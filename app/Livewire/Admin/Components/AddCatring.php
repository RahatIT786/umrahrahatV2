<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

class AddCatring extends Component
{
    use WithFileUploads;
    public $foodId;
    public $foodType;
    public $foodPrice;
    public $currency;
    public $foodBreakFast;
    public $foodLunch;
    public $foodDinner;
    public $foodBreakFastImage;
    public $foodLunchImage;
    public $foodDinnerImage;
    public $footPdf;
    public $foodBreakFastImagePath;
    public $foodLunchImagePath;
    public $foodDinnerImagePath;
    public $deleteStatus = 1;

    protected $rules = [
        "foodType"=> "required|string|max:250",
        "foodPrice"=> "required|numeric",
        "currency"=> "required",
        "foodBreakFast"=> "required|string|max:1000",
        "foodLunch"=> "required|string|max:1000",
        "foodDinner"=> "required|string|max:1000",
        'foodBreakFastImage' => 'nullable|image|max:5120',
        'foodLunchImage'=> 'nullable|image|max:5120',
        'foodDinnerImage'=> 'nullable|image|max:5120',
        'footPdf'=> 'nullable|image|max:5120',
    ];

    protected $messages = [
        'foodType.required' => 'food Type is required.',
        'foodType.string' => 'food Type must be a string.',
        'foodType.max' => 'food Type cannot exceed 150 characters.',
        
        'foodPrice.required' => 'food Price is required.',
        'foodPrice.numeric' => 'food Price must be a numeric value.',
        
        'foodBreakFast.required' => 'foodBreakFast address is required.',
        'foodBreakFast.string' => 'foodBreakFast address must be a string.',
        'foodBreakFast.max' => 'foodBreakFast address cannot exceed 1000 characters.',
        
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
    

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-catring');
    }
}
