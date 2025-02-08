<?php

namespace App\Livewire\UserFront\Umrahv2;

use App\Models\CarSector;
use App\Models\CarType;
use App\Models\CateringController;
use App\Models\HotelDetail;
use App\Models\Laundry;
use App\Models\sightController;
use App\Models\transportController;
use App\Models\VisaDetail;
use Carbon\Carbon;
use DateTime;
use Livewire\Component;
use Livewire\Attributes\Layout; 

class CustomPackage extends Component
{

    public $currentStep = 1;
    public $totalSteps = 6;
    public $formData = [];

    public $makkaHotels;
    public $madinaHotels;
    public $visaType;
    public $carSector;
    public $carType=[];
    public $makkaSightSeeing;
    public $madinaSightSeeing;
    public $mealType;
    public $laundryType;

    public $selectedSector;

    public $makkaCheckIn;
    public $makkaCheckOut;

    public $madinaCheckIn;
    public $madinaCheckOut;
    public $makkaHotelDaysCount;
    public $madinaHotelDaysCount;
    public $visatype;
    public $visacount;
    public $visaTotalPrice;
    public $SelectedMakkaSight;
    public $SelectedMadinaSight;
    public $makkaSightPrice;
    public $madinaSightPrice;
    public $mealPrice;
    public $laundryPrice;
    public $genKitPrice;
    public $ladiKitPrice;
    public $SelectedMeal;
    public $SelectedLaundry;
    public $umrahGenKitCount;
    public $umrahLadiKitCount;


    public function mount(){
        

        $this->getAllDetails();

    }
  
    public function getAllDetails(){
       $this->makkaHotels= HotelDetail::where('deleteStatus',1)->where('hotelCity','makkah')->pluck('hotelName');
       $this->madinaHotels= HotelDetail::where('deleteStatus',1)->where('hotelCity','madina')->pluck('hotelName');
       $this->visaType=VisaDetail::where('delete_status',1)->get();
       $this->carSector=CarSector::where('delete_status',1)->get();
       $this->mealType=CateringController::where('delete_status',1)->pluck('foodType');
       $this->laundryType=Laundry::where('delete_status',1)->pluck('laundry_type');
       $this->makkaSightSeeing= sightController::where('delete_status',1)->where('sightCity','makkah')->pluck('sightName');
       $this->madinaSightSeeing= sightController::where('delete_status',1)->where('sightCity','madinah')->pluck('sightName');
       $this->carType=CarType::where('delete_status',1)->pluck('car_type');
    }

    public $rooms = []; // Store rooms
    public $makkaRooms = []; // Store rooms


    // public function updatedSelectedSector($value){
      
    //     $this->carType= transportController::where('carSector',$value)->pluck('carType');
    // //    dd( $transportDetails);
    // //     $this->carType=CarType::where('delete_status',1)->where('id',$transportDetails->carType)->pluck('car_type');
    // //     dd($this->carType);
    // }
    public function updatedUmrahGenKitCount($value){
        $this->genKitPrice=1800 * $value;
    }
    public function updatedUmrahLadiKitCount($value){
        $this->ladiKitPrice=1500 * $value;
    }
    public function updatedSelectedLaundry($value){

       $this->laundryPrice= Laundry::where('delete_status',1)->where('laundry_type',$value)->value('price');

    }
    public function updatedSelectedMeal($value){
        $this->mealPrice=CateringController::where('delete_status',1)->where('foodType',$value)->value('foodPrice');
        // dd( $this->mealPrice);
    }

    public function updatedSelectedMakkaSight($value){
       $this->makkaSightPrice = sightController::where('sightCity','makkah')->where('sightName',$value)->value('sightPrice');
    }
    public function updatedSelectedMadinaSight($value){
        $this->madinaSightPrice = sightController::where('sightCity','madinah')->where('sightName',$value)->value('sightPrice');
     }
    public function updatedMakkaCheckOut()
    {
        if ($this->makkaCheckIn && $this->makkaCheckOut) {
            $this->makkaHotelDatesCalculate();
        }
    }

    public function updatedMadinaCheckOut()
    {
        if ($this->madinaCheckIn && $this->madinaCheckOut) {
            $this->madinaHotelDatesCalculate();
        }
    }

   
    public function updatedVisacount($value){
        // dd($value);
          $id= $this->visatype;
        $price=  VisaDetail::where('delete_status',1)->where('id',$id)->value('price');
       
        $this->visaTotalPrice= (int)$price * (int) ($value);
      
    }

    public function makkaHotelDatesCalculate(){
        $checkIn = Carbon::parse($this->makkaCheckIn);
        $checkOut = Carbon::parse($this->makkaCheckOut);

        if ($checkOut->greaterThan($checkIn)) {
            $this->makkaHotelDaysCount = $checkIn->diffInDays($checkOut);
        } else {
            $this->makkaHotelDaysCount = 0; // If check-out is before check-in, reset to 0
        }
    }
    public function madinaHotelDatesCalculate(){
        $checkIn = Carbon::parse($this->madinaCheckIn);
        $checkOut = Carbon::parse($this->madinaCheckOut);

        if ($checkOut->greaterThan($checkIn)) {
            $this->madinaHotelDaysCount = $checkIn->diffInDays($checkOut);
        } else {
            $this->madinaHotelDaysCount = 0; // If check-out is before check-in, reset to 0
        }
    }

    public function addRoom()
    {
        $this->rooms[] = ['adults' => 1, 'children' => 0]; // Add new room
    }

    public function addMakkaRoom()
    {
        $this->makkaRooms[] = ['adults' => 1, 'children' => 0]; // Add new room
    }

    public function removeRoom($index)
    {
        unset($this->rooms[$index]); // Remove a specific room
        $this->rooms = array_values($this->rooms); // Reindex array
    }

    public function removeMakkaRoom($index)
    {
        unset($this->makkaRooms[$index]); // Remove a specific room
        $this->makkaRooms = array_values($this->makkaRooms); // Reindex array
    }


    public function nextStep()
    {
        $this->validateStep();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function skipStep()
    {
        $this->currentStep++;
    }

    public function submitForm()
    {
        // Validate the final step
        $this->validateStep();

        // Process form data (e.g., save to database)
        // Example:
        // YourModel::create($this->formData);

        // Reset form
        $this->resetForm();
    }

    public function validateStep()
    {
        // Add validation rules for each step
        switch ($this->currentStep) {
            case 1:
                $this->validate([
                    'formData.field1' => 'required',
                ]);
                break;
            case 2:
                $this->validate([
                    'formData.field2' => 'required',
                ]);
                break;
            // Add more cases for each step
        }
    }

    public function resetForm()
    {
        $this->currentStep = 1;
        $this->formData = [];
    }

 



    public $checkInDate;
    public $checkOutDate;
    public $daysBetween = 0;

    public function updated($field)
    {
        if ($this->checkInDate && $this->checkOutDate) {
            $this->daysBetween = (new DateTime($this->checkOutDate))->diff(new DateTime($this->checkInDate))->days;
        }
    }






    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.umrahv2.custom-package');
    }
}
