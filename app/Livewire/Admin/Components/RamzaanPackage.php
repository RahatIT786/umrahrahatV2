<?php

namespace App\Livewire\Admin\Components;

use App\Models\RamzaanPack;
use App\Models\RamzaanPackType;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Component;

class RamzaanPackage extends Component


{
    // public $packageTypes;
    public $package_name;
   
    public $departure_city_list=['delhi','mumbai','bengaluru','hyderabad','ahmedabad','lucknow'];
    public $departure_city=[];
    public $flight_name_list=['saudi airlines','indigo','flynas','akasa'];
    public $flight_name=[];
    public $infant_price= [
        'infant' => '',
        'child' => '',
        'child_with_bed' => '',
        'child_without_bed' => ''
    ];

    public $days;

    public $description;
    public $itinerary;

    public $packageCategory=0;


   





    public $packageFlavours=[];
    public $packageTypes=['affortable','regular'];



    public function mount(){
      $this->packageCategory=0;
      $this->packageFlavours=[];
    }

    public $value;

    public function updatedPackageCategory($value){
        $this->packageFlavours=[];
        // dd($value);
        $this->value=$value;
      

        if( $value === '1'){
          
           
            // $this->packageFlavours=RamzaanPackType::with('ramzaanPackSharing')->take(2)->get();
            $this->packageFlavours=[
                'supersaver'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
                'royal'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
                'classic'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>'']];
        

            $this->validate([
                'packageFlavours.supersaver.sharing' => 'required|numeric',
                'packageFlavours.supersaver.quad' => 'required|numeric',
                'packageFlavours.supersaver.triple' => 'required|numeric',
                'packageFlavours.supersaver.double' => 'required|numeric',
                'packageFlavours.supersaver.single' => 'required|numeric',

                'packageFlavours.royal.sharing' => 'required|numeric',
                'packageFlavours.royal.quad' => 'required|numeric',
                'packageFlavours.royal.triple' => 'required|numeric',
                'packageFlavours.royal.double' => 'required|numeric',
                'packageFlavours.royal.single' => 'required|numeric',

                'packageFlavours.classic.sharing' => 'required|numeric',
                'packageFlavours.classic.quad' => 'required|numeric',
                'packageFlavours.classic.triple' => 'required|numeric',
                'packageFlavours.classic.double' => 'required|numeric',
                'packageFlavours.classic.single' => 'required|numeric',
            ]);

            // $this->dispatchBrowserEvent('reset-summernote');

        }
        elseif( $value === '2'){
            



            $this->packageFlavours=[
                'bronze'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
                'silver'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>''],
                'gold'=>['sharing'=>'','quad'=>'','triple'=>'','double'=>'','single'=>'']
            ];
            $this->validate([
                'packageFlavours.bronze.sharing' => 'required|numeric',
                'packageFlavours.bronze.quad' => 'required|numeric',
                'packageFlavours.bronze.triple' => 'required|numeric',
                'packageFlavours.bronze.double' => 'required|numeric',
                'packageFlavours.bronze.single' => 'required|numeric',

                'packageFlavours.silver.sharing' => 'required|numeric',
                'packageFlavours.silver.quad' => 'required|numeric',
                'packageFlavours.silver.triple' => 'required|numeric',
                'packageFlavours.silver.double' => 'required|numeric',
                'packageFlavours.silver.single' => 'required|numeric',

                'packageFlavours.gold.sharing' => 'required|numeric',
                'packageFlavours.gold.quad' => 'required|numeric',
                'packageFlavours.gold.triple' => 'required|numeric',
                'packageFlavours.gold.double' => 'required|numeric',
                'packageFlavours.gold.single' => 'required|numeric',
            ]);

            // $this->dispatchBrowserEvent('reset-summernote');
           
            // $this->packageFlavours=RamzaanPackType::with('ramzaanPackSharing')->skip(max(0, RamzaanPackType::count() - 2))->take(2)->get();
           
        }
        else{
            $this->packageFlavours=[];
        }
    }


    public function packageSubmit(){
     

        // $this->validate([
        //     'package_name'=> 'required|string|max:100',
        //     'departure_city' => 'required|array|min:1',
        //     'flight_name' => 'required|array|min:1',
        //     'infant_price.infant' => 'required|numeric',
        //     'infant_price.child' => 'required|numeric',
        //     'infant_price.child_with_bed' => 'required|numeric',
        //     'infant_price.child_without_bed' => 'required|numeric',
        //     'days'=>'required|numeric',

           
        // ]);

        RamzaanPack::create([
            'master_name'=>$this->package_name,
            "days"=>$this->days,
            "package_data"=>$this->packageFlavours,
            'departure_city'=>$this->departure_city,
            'flight_name'=>$this->flight_name,
            'infant_price'=>$this->infant_price,
            'description'=>$this->description,
            'itinerary'=>$this->itinerary,

            
        ]);
        session()->flash('message','Ramzaan Package Added Successfully..!');
       $this->reset([
          

       ]);
       
    }


    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.ramzaan-package');
    }
}
