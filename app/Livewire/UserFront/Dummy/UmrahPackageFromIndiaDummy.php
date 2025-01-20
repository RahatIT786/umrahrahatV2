<?php

namespace App\Livewire\UserFront\Dummy;

use Livewire\Component;

class UmrahPackageFromIndiaDummy extends Component
{


    // AIRLINE VARIABLES 
    public $sa='saudi Airline';
    public $aks='akasa Air';
    public $ingo='indigo';
    public $fls='saudi Airline';

    // CITY VARIABLES
    public $mb='mumbai';
    public $del='delhi';
    public $l='lucknow';
    public $ban='bangalore';
    public $hy='hyderabad';
    public $ah='ahmedabad';

    // package types  variables
    public $ss='super saver';
    public $rl='royal';
    public $cl='classic';
    public $bro='bronze';
    public $sil='silver';
    public $gol='gold';
    public $eli='elite';
    public $est='esteem';
    public $exe='executive';

    // sharings variables
    public $shr="sharing"; 
    public $qd="quad"; 
    public $qnt="quint"; 
    public $tri="triple"; 
    public $dbl="double"; 
    public $sgl="single"; 
   


    public $umrahIndia=[

        $mb=>[
            $ss=>[
                
        "id"=>1,
        "name"=>"Silver",
        "city"=>"mumbai",
        "days"=>14,
        "airline"=>$saudiAirline,
        "sharing"=>72786,
        "quad"=>72786,
        "triple"=>72786,
        "double"=>72786,
        "single"=>72786,
            ],
            
          
        ],
    ];
























    public function render()
    {
        return view('livewire.user_front.dummy.umrah-package-from-india-dummy');
    }
}
