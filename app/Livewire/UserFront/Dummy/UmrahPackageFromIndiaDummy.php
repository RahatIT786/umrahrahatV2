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
                    "name" => $this->sil,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 72786,
                    "quad" => 72786,
                    "triple" => 72786,
                    "double" => 72786,
                    "single" => 72786,
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 78786,
                    "quad" => 80786,
                    "triple" => 84786,
                    "double" => 90786,
                    "single" => 110786,
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 82786,
                    "quad" => 84786,
                    "triple" => 88786,
                    "double" => 97786,
                    "single" => 121786,
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 85786,
                    "quad" => 88786,
                    "triple" => 93786,
                    "double" => 102786,
                    "single" => 132786,
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 92786,
                    "quad" => 97786,
                    "triple" => 104786,
                    "double" => 120786,
                    "single" => 166786,
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 112786,
                    "triple" => 123786,
                    "double" => 146786,
                    "single" => 214786,
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => $this->eli,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 126786,
                    "triple" => 137786,
                    "double" => 154786,
                    "single" => 230786,
                ],
                $this->est => [
                    "id" => 8,
                    "name" => $this->est,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 156786,
                    "triple" => 177786,
                    "double" => 218786,
                    "single" => 358786,
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => $this->exe,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 170786,
                    "triple" => 194786,
                    "double" => 243786,
                    "single" => 407786,
                ],
            ],

            // bangalore 
            $this->l => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 84786,
                    "quad" => 85786,
                    "triple" => 86786,
                    "double" => 89786,
                    "single" => 98786,
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 91786,
                    "quad" => 93786,
                    "triple" => 97786,
                    "double" => 105786,
                    "single" => 127786,
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 95786,
                    "quad" => 98786,
                    "triple" => 102786,
                    "double" => 112786,
                    "single" => 140786,
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 98786,
                    "quad" => 101786,
                    "triple" => 107786,
                    "double" => 108786,
                    "single" => 152786,
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 107786,
                    "quad" => 112786,
                    "triple" => 121786,
                    "double" => 138786,
                    "single" => 191786,
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => $this->l,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 130786,
                    "triple" => 143786,
                    "double" => 168786,
                    "single" => 246786,
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => $this->eli,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 146786,
                    "triple" => 158786,
                    "double" => 177786,
                    "single" => 264786,
                ],
                $this->est => [
                    "id" => 8,
                    "name" => $this->est,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 180786,
                    "triple" => 203786,
                    "double" => 250786,
                    "single" => 410786,
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => $this->exe,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quad" => 195786,
                    "triple" => 223786,
                    "double" => 280786,
                    "single" => 467786,
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
