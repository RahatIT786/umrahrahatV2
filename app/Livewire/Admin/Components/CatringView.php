<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CateringController;
use Livewire\Attributes\Layout;

class CatringView extends Component
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
            $this->footPdf=$foods->footPdf;
            $this->foodBreakFastImagePath = $foods->foodBreakFastImagePath;
            $this->foodLunchImagePath = $foods->foodLunchImagePath;
            $this->foodDinnerImagePath = $foods->foodDinnerImagePath;
        }
    }
    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.catring-view');
    }
}
