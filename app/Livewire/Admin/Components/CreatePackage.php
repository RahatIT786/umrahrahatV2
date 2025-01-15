<?php

namespace App\Livewire\Admin\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;









class CreatePackage extends Component
{

    public $updateSeletedOption;
    public $packageTypeOptions =[];

    public $package_type_ids = [];

    public $package_types=[];

    public $sharings=[];

    public $value;
    

    public $createPackage;


    // public $packageType1=['super saver','royal','classic','bronze','silver','gold','elite','esteem','executive'];
    // public $packageType2=['super saver','royal','classic','bronze','silver','gold'];

    public $reqularUmrahPart1=['super saver','royal','classic','bronze','silver'];
    public $reqularUmrahPart2=['gold','elite','esteem','executive'];
   
  
    public function updatedUpdateSeletedOption($value){
        // dd($value);
        // logger()->info('Updated package_type_ids:', $value);
        $this->value=$value;
        if(in_array($value,['ramzan' ,'sup','lup']) ){
            $this->packageTypeOptions=['supersaver','royal','classic','bronze','silver','gold'];
           


        }
        elseif(in_array($value,['rup']) ){
            $this->packageTypeOptions=['super saver','royal','classic','bronze','silver','gold','elite','esteem','executive'];
        }
        else {
            $this->packageTypeOptions = [];
        }
        

      



    }

    public function updatedSharings(){

          // Check the selected package types and set sharings accordingly
        //   if (in_array('lup', $this->package_types) || in_array('sup', $this->package_types)) {
        //     $this->sharings = ['quint', 'quad', 'triple', 'double', 'single'];
        // } elseif (in_array('ramzan', $this->package_types)) {
        //     $this->sharings = ['sharing', 'quad', 'triple', 'double', 'single'];
        // } else {
        //     $this->sharings = [];  // Clear sharings if no specific package types are selected
        // }

        // if($this->value === 'lup'  || $this->value === 'sup'){
        //     $this->sharings=['quint','quad','triple','double','single'];
        // }
        // elseif($this->value === 'ramzan' ){
        //     $this->sharings=['sharing','quad','triple','double','single'];
        // }
        // elseif($this->value === 'rup' && !empty(array_intersect($this->package_types,$this->reqularUmrahPart1))){
        //     $this->sharings=['sharing','quad','triple','double','single'];
        // }
        // elseif($this->value === 'rup' && !empty(array_intersect($this->package_types,$this->reqularUmrahPart2))){
        //     $this->sharings=['quad','triple','double','single'];
        // }

        if (in_array('ramzan', $this->package_types)) {
            $this->sharings = ['sharing', 'quad', 'triple', 'double', 'single'];
        } elseif (in_array('sup', $this->package_types) || in_array('lup', $this->package_types)) {
            $this->sharings = ['quint', 'quad', 'triple', 'double', 'single'];
        } elseif (!empty(array_intersect($this->package_types, $this->reqularUmrahPart1))) {
            // When package types from Part 1 are selected, show these sharing options
            $this->sharings = ['sharing', 'quad', 'triple', 'double', 'single'];
        } elseif (!empty(array_intersect($this->package_types, $this->reqularUmrahPart2))) {
            // When package types from Part 2 are selected, show these sharing options
            $this->sharings = ['quad', 'triple', 'double', 'single'];
        } else {
            // Default sharing options if none of the above conditions are met
            $this->sharings = [];
        }







    }


    public function createPackageprice(){
        $this->createPackage=true;
        $this->updatedSharings();



    }















    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.create-package'
    
    
    );
    }
}
