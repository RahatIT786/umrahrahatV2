<?php
namespace App\Livewire\UserFront\Dummy;

use Livewire\Component;
use Livewire\Attributes\Layout;

class UmrahPackageFromIndiaDummy extends Component
{
    // AIRLINE VARIABLES 
    public $sa = 'saudi Airline';
    public $aks = 'akasa Air';
    public $ingo = 'indigo';
    public $fls = 'saudi Airline';

    // CITY VARIABLES
    public $mb = 'mumbai';
    public $del = 'delhi';
    public $l = 'lucknow';
    public $ban = 'bangalore';
    public $hy = 'hyderabad';
    public $ah = 'ahmedabad';

    // package types variables
    public $ss = 'super saver';
    public $rl = 'royal';
    public $cl = 'classic';
    public $bro = 'bronze';
    public $sil = 'silver';
    public $gol = 'gold';
    public $eli = 'elite';
    public $est = 'esteem';
    public $exe = 'executive';

    // sharings variables
    public $shr = "sharing"; 
    public $qd = "quad"; 
    public $qnt = "quint"; 
    public $tri = "triple"; 
    public $dbl = "double"; 
    public $sgl = "single"; 

    // Umrah India package array (moved to mount method)
    public $umrahIndia = [];

    public function mount()
    {
        // Now we can access instance variables here and populate $umrahIndia dynamically
        $this->umrahIndia = [
            $this->mb => [
                $this->ss => [
                    "id" => 1,
                    "name" => "Silver",
                    "city" => "mumbai",
                    "days" => 14,
                    "airline" => $this->sa,
                    "sharing" => 72786,
                    "quad" => 72786,
                    "triple" => 72786,
                    "double" => 72786,
                    "single" => 72786,
                ],
            ],
            $this->ban => [
                $this->ss => [
                    "id" => 1,
                    "name" => "Super Saver",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 78786,
                    "quad" => 79786,
                    "triple" => 80786,
                    "double" => 83786,
                    "single" => 71786,
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => "Royal",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 84786,
                    "quad" => 86786,
                    "triple" => 90786,
                    "double" => 96786,
                    "single" => 116786,
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => "Classic",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 88786,
                    "quad" => 90786,
                    "triple" => 94786,
                    "double" => 103786,
                    "single" => 127786,
                ],
                $this->bro => [
                    "id" => 4,
                    "name" => "Bronze",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 91786,
                    "quad" => 94786,
                    "triple" => 99786,
                    "double" => 108786,
                    "single" => 138786,
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => "Silver",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 98786,
                    "quad" => 103786,
                    "triple" => 110786,
                    "double" => 126786,
                    "single" => 172786,
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => "Gold",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 118786,
                    "triple" => 130786,
                    "double" => 152786,
                    "single" => 220786,
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => "Elite",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 132786,
                    "triple" => 143786,
                    "double" => 160786,
                    "single" => 236786,
                ],
                $this->est => [
                    "id" => 8,
                    "name" => "Esteem",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 162786,
                    "triple" => 183786,
                    "double" => 224786,
                    "single" => 364786,
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => "Executive",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 176786,
                    "triple" => 200786,
                    "double" => 250786,
                    "single" => 413786,
                ],
            ],
            $this->del => [
                $this->ss => [
                    "id" => 1,
                    "name" => "Super Saver",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 76786,
                    "quad" => 77786,
                    "triple" => 79786,
                    "double" => 82786,
                    "single" => 91786,
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => "Royal",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 83786,
                    "quad" => 86786,
                    "triple" => 90786,
                    "double" => 97786,
                    "single" => 120786,
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => "Classic",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 87786,
                    "quad" => 90786,
                    "triple" => 95786,
                    "double" => 104786,
                    "single" => 133786,
                ],
                $this->bro => [
                    "id" => 4,
                    "name" => "Bronze",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 91786,
                    "quad" => 94786,
                    "triple" => 100786,
                    "double" => 111786,
                    "single" => 145786,
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => "Silver",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 99786,
                    "quad" => 104786,
                    "triple" => 113786,
                    "double" => 131786,
                    "single" => 184786,
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => "Gold",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 122786,
                    "triple" => 135786,
                    "double" => 161786,
                    "single" => 238786,
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => "Elite",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 138786,
                    "triple" => 150786,
                    "double" => 170786,
                    "single" => 257786,
                ],
                $this->est => [
                    "id" => 8,
                    "name" => "Esteem",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 172786,
                    "triple" => 196786,
                    "double" => 243786,
                    "single" => 403786,
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => "Executive",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quad" => 188786,
                    "triple" => 216786,
                    "double" => 272786,
                    "single" => 459786,
                ],
            ],
        ];
    }

    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.dummy.umrah-package-from-india-dummy');
    }
}
