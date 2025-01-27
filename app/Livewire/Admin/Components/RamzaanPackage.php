<?php

namespace App\Livewire\Admin\Components;

use App\Models\DepartureCity;
use App\Models\FlightManagement;
use App\Models\HotelDetail;
use App\Models\inclusion;
use App\Models\RamzaanFlavour;
use App\Models\RamzaanPack;
use App\Models\RamzaanPackType;
use App\Models\RamzaanSharing;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class RamzaanPackage extends Component


{

    use WithFileUploads;
    // public $packageTypes;
    // public $package_name;
   
    // public $departure_city_list=['delhi','mumbai','bengaluru','hyderabad','ahmedabad','lucknow'];
    // public $departure_city=[];
    // public $flight_name_list=['saudi airlines','indigo','flynas','akasa'];
    // public $flight_name=[];
    // public $infant_price= [
    //     'infant' => '',
    //     'child' => '',
    //     'child_with_bed' => '',
    //     'child_without_bed' => ''
    // ];

    // public $days;

    // public $description;
    // public $itinerary;

    // public $packageCategory=0;


   





    // public $packageFlavours=[];
    // public $packageTypes=['affortable','regular'];



    // public function mount(){
    //   $this->packageCategory=0;
    //   $this->packageFlavours=[];
    // }

    // public $value;

    // public function updatedPackageCategory($value){
    //     $this->packageFlavours=[];
    //     // dd($value);
    //     $this->value=$value;
      

    //     if( $value === '1'){
          
           
    //         // $this->packageFlavours=RamzaanPackType::with('ramzaanPackSharing')->take(2)->get();
    //         $this->packageFlavours=[
    //             'supersaver'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
    //             'royal'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
    //             'classic'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>'']];
        

    //         $this->validate([
    //             'packageFlavours.supersaver.sharing' => 'required|numeric',
    //             'packageFlavours.supersaver.quad' => 'required|numeric',
    //             'packageFlavours.supersaver.triple' => 'required|numeric',
    //             'packageFlavours.supersaver.double' => 'required|numeric',
    //             'packageFlavours.supersaver.single' => 'required|numeric',

    //             'packageFlavours.royal.sharing' => 'required|numeric',
    //             'packageFlavours.royal.quad' => 'required|numeric',
    //             'packageFlavours.royal.triple' => 'required|numeric',
    //             'packageFlavours.royal.double' => 'required|numeric',
    //             'packageFlavours.royal.single' => 'required|numeric',

    //             'packageFlavours.classic.sharing' => 'required|numeric',
    //             'packageFlavours.classic.quad' => 'required|numeric',
    //             'packageFlavours.classic.triple' => 'required|numeric',
    //             'packageFlavours.classic.double' => 'required|numeric',
    //             'packageFlavours.classic.single' => 'required|numeric',
    //         ]);

    //         // $this->dispatchBrowserEvent('reset-summernote');

    //     }
    //     elseif( $value === '2'){
            



    //         $this->packageFlavours=[
    //             'bronze'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
    //             'silver'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
    //             'gold'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>'']
    //         ];
    //         $this->validate([
    //             'packageFlavours.bronze.sharing' => 'required|numeric',
    //             'packageFlavours.bronze.quad' => 'required|numeric',
    //             'packageFlavours.bronze.triple' => 'required|numeric',
    //             'packageFlavours.bronze.double' => 'required|numeric',
    //             'packageFlavours.bronze.single' => 'required|numeric',

    //             'packageFlavours.silver.sharing' => 'required|numeric',
    //             'packageFlavours.silver.quad' => 'required|numeric',
    //             'packageFlavours.silver.triple' => 'required|numeric',
    //             'packageFlavours.silver.double' => 'required|numeric',
    //             'packageFlavours.silver.single' => 'required|numeric',

    //             'packageFlavours.gold.sharing' => 'required|numeric',
    //             'packageFlavours.gold.quad' => 'required|numeric',
    //             'packageFlavours.gold.triple' => 'required|numeric',
    //             'packageFlavours.gold.double' => 'required|numeric',
    //             'packageFlavours.gold.single' => 'required|numeric',
    //         ]);

    //         // $this->dispatchBrowserEvent('reset-summernote');
           
    //         // $this->packageFlavours=RamzaanPackType::with('ramzaanPackSharing')->skip(max(0, RamzaanPackType::count() - 2))->take(2)->get();
           
    //     }
    //     else{
    //         $this->packageFlavours=[];
    //     }
    // }


    // public function packageSubmit(){
     

      
    //     session()->flash('message','Ramzaan Package Added Successfully..!');
    //    $this->reset([
          

    //    ]);
       
    // }

    public $departureCity;
    public $flights;
    public $includes;
    public $photo;
    public $package_name;
    public $sharings;
    public $packageTypes;
    public $package_type_ids = [];

    public $selectedOptions=[];

    public $items=[];


    public $infant;
    public $child;

    public $child_with_bed;
    public $child_without_bed;

    public $makkaHotels;
    public $madinaHotels;

    // this variable for get the rating hotel city wise
    public $makkaHotelRating=[];
    public $madinaHotelRating=[];

    //this variable for get rating model
    public $makkaRatingHotel;
    public $madinaRatingHotel;

    // this variable for temp store  hotels 
    public $allHotels=[];
    public $makkaRatingHotels=[];
    public $madinaRatingHotels=[];

    //store city name
    public $makkah='makka';
    public $madina='madina';



    public function mount(){
        $this->departureCity=DepartureCity::all();
        $this->flights=FlightManagement::all();
        $this->includes=inclusion::all();
        $this->packageTypes=RamzaanFlavour::all();
        $this->sharings=RamzaanSharing::all();
        
        $this->allHotels=HotelDetail::select('hotelCity')->distinct()->get();

        // $this->makkaHotelRating=HotelDetail::where('hotelCity',$this->makkah)->distinct()->pluck('hotelStarRating');
        // $this->madinaHotelRating=HotelDetail::where('hotelCity',$this->madina)->distinct()->pluck('hotelStarRating');

        // $this->makkaHotels=HotelDetail::where('hotelCity',$this->makkah)->get();
        // $this->madinaHotels=HotelDetail::where('hotelCity',$this->madina)->get();
          
        foreach($this->selectedOptions as $option){
            $this->makkaHotelRating[$option]=HotelDetail::where('hotelCity',$this->makkah)->distinct()->pluck('hotelStarRating');
            // $this->makkaHotels[$option]=HotelDetail::where('hotelCity',$this->makkah)->distinct()->pluck('hotelStarRating');
            $this->makkaHotels[$option]=[];
        }
        
    }


    public function updatedSelectedOptions($value)
    {
        // dd($value);
        // $this->items = $value;
       
        foreach($this->selectedOptions as $option){
            // $this->makkaHotelRating[$option] = [$option];
            $this->makkaHotelRating[$option]=HotelDetail::where('hotelCity',$this->makkah)->distinct()->pluck('hotelStarRating');
            // $this->makkaHotels[$option]=HotelDetail::where('hotelCity',$this->makkah)->distinct()->pluck('hotelStarRating');
            $this->makkaHotels[$option]=[];
            $this->makkaRatingHotels[$option]=[];
           
        }
        
    }
    public function updatedmakkaRatingHotel($value,$option){
        dd($value,$option);
        $this->makkaRatingHotels[$option]=HotelDetail::where('hotelStarRating',$value)
                                                ->where('hotelCity',$this->makkah)    
                                                ->get()->toArray();

    }
    public function updatedMadinaRatingHotel($value){
        // dd($value);
        $this->madinaRatingHotels=HotelDetail::where('hotelStarRating',$value)
                                                ->where('hotelCity',$this->madina)    
                                                ->get();

    }
   


    public function getPackageForm($value)
    {

        $this->package_type_ids = RamzaanFlavour::whereIn('id', $value)->pluck('name', 'id')->toArray();
        // $validated = $this->validate([
        //     'package_name' => 'required',
        //     'package_type_ids' => 'required',
        //     'service_id' => 'required',
        //     'description' => 'required',
        //     'package_image.*' => 'required|image',
        //     'package_includes.*' => 'required',
        // ]);
    }





















    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.ramzaan-package');
    }
}
