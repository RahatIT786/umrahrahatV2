<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\CateringController;

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
    public $footPdfPath;
    public $deleteStatus = 1;

    protected $rules = [
        "foodType"=> "required|string|max:250",
        "foodPrice"=> "required|numeric",
        "currency"=> "required",
        "foodBreakFast"=> "required|string|max:1000",
        // "foodLunch"=> "required|string|max:1000",
        // "foodDinner"=> "required|string|max:1000",
        'foodBreakFastImage' => 'nullable|image|max:5120',
        // 'foodLunchImage'=> 'nullable|image|max:5120',
        // 'foodDinnerImage'=> 'nullable|image|max:5120',
        'footPdf'=> 'nullable',
    ];

    protected $messages = [
        'foodType.required' => 'food Type is required.',
        'foodType.string' => 'food Type must be a string.',
        'foodType.max' => 'food Type cannot exceed 150 characters.',
        
        'foodPrice.required' => 'food Price is required.',
        'foodPrice.numeric' => 'food Price must be a numeric value.',
        
        'foodBreakFast.required' => 'food BreakFast  is required.',
        'foodBreakFast.string' => 'food BreakFast  must be a string.',
        'foodBreakFast.max' => 'food BreakFast cannot exceed 1000 characters.',
        
        'foodLunch.required' => 'food Lunch  is required.',
        'foodLunch.string' => 'food Lunch  must be a string.',
        'foodLunch.max' => 'food Lunch  cannot exceed 1000 characters.',

        'foodDinner.required' => 'food Dinner  is required.',
        'foodDinner.string' => 'food Dinner  must be a string.',
        'foodDinner.max' => 'food Dinner  cannot exceed 1000 characters.',

        'foodBreakFastImage.image' => 'The image must be an image file.',
        'foodBreakFastImage.max' => 'The image size must not exceed 5MB.',
        
        'foodLunchImage.image' => 'The  image  must be an image file.',
        'foodLunchImage.max' => 'The  image  size must not exceed 5MB.',
        
        'foodDinnerImage.image' => 'The image  must be an image file.',
        'foodDinnerImage.max' => 'The image  size must not exceed 5MB.',
    ];

    public function mount($id = null){
        if($id){
            $foods = CateringController::findOrFail( $id );
            $this->foodId = $foods->id;
            $this->foodType = $foods->foodType;
            $this->foodPrice =$foods->foodPrice;
            $this->currency = $foods->currency;
            $this->foodBreakFast = $foods->foodBreakFast;
            $this->foodLunch = $foods->foodLunch;
            $this->foodDinner = $foods->foodDinner;
            $this->foodBreakFastImagePath = $foods->foodBreakFastImagePath;
            $this->foodLunchImagePath = $foods->foodLunchImagePath;
            $this->foodDinnerImagePath = $foods->foodDinnerImagePath;
        }
    }
    public function submit()
    {
        $this->validate();
        //dd('test');
        
        $foodBreakFastImagePath = $this->foodBreakFastImage ? $this->foodBreakFastImage->store('uploads','public') : null;
       // dd($foodBreakFastImagePath);
        $foodLunchImagePath = $this->foodLunchImage ? $this->foodLunchImage->store('uploads','public'):null;
        $foodDinnerImagePath = $this->foodDinnerImage ? $this->foodDinnerImage->store('uploads' , 'public'):null;
        $footPdfPath =$this->footPdf ? $this->footPdf->store('uploads','public'):null;

        if ($this->foodId) {
            // Update existing visa
            $food = CateringController::findOrFail($this->foodId);
            $food->update([
                    'foodType' => $this->foodType,
                    'foodPrice' => $this->foodPrice,
                    'currency' => $this->currency,
                    'foodBreakFast' => $this->foodBreakFast,
                    'foodLunch' => $this->foodLunch,
                    //'foodDinner' => $this->foodDinner,
                    'foodBreakFastImagePath' => $foodBreakFastImagePath ?? $food->foodBreakFastImagePath,
                    'foodLunchImagePath' => $foodLunchImagePath ?? $food->foodLunchImagePath,
                    'foodDinnerImagePath' => $foodDinnerImagePath ?? $food->foodDinnerImagePath,
                    'footPdf' => $footPdfPath ?? $food->footPdfPath,
            ]);
            session()->flash('message', 'Visa details updated successfully!');
        } else {
            CateringController::create([
                'foodType' => $this->foodType,
                'foodPrice' => $this->foodPrice,
                'currency' => $this->currency,
                'foodBreakFast' => $this->foodBreakFast,// this is using for description
                'foodLunch' => $this->foodLunch,
                // 'foodDinner' => $this->foodDinner,
                'foodBreakFastImagePath' => $foodBreakFastImagePath, // this is using for food image
                // 'foodLunchImagePath' => $foodLunchImagePath,
                // 'foodDinnerImagePath' => $foodDinnerImagePath,
                'footPdf' => $footPdfPath,
               
            ]);
            session()->flash('message', 'Catering details added successfully!');
        }
        // Reset form fields
        $this->reset([
            'foodType',
            'foodPrice',
            "currency",
            "foodBreakFast",
            "foodLunch",
            "foodDinner",
            "foodBreakFastImage",
            "foodLunchImage",
            "foodDinnerImage",
            "footPdf"
        ]);
    }

    

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-catring');
    }
}
