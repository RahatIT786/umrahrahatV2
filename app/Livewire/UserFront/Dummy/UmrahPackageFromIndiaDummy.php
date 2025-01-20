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
    public $ss = 'Super saver';
    public $rl = 'Royal';
    public $cl = 'Classic';
    public $bro = 'Bronze';
    public $sil = 'Silver';
    public $gol = 'Gold';
    public $eli = 'Elite';
    public $est = 'Esteem';
    public $exe = 'Executive';

    // sharings variables
    public $shr = "sharing"; 
    public $qd = "quad"; 
    public $qnt = "quint"; 
    public $tri = "triple"; 
    public $dbl = "double"; 
    public $sgl = "single"; 

    // Days
    // public $threedays = "3";
    // public $fivedays = "5";
    // public $eightdays = "8";
    // public $tendays = "10"; 
    // public $eighteendays = "18";
    // public $tweentyDays = "20";
    // public $tweentyfive = "25";
    // public $thitydays = "30";
    public $threedays = "three";
    public $fivedays = "five";
    public $eightdays = "eight";
    public $tendays = "ten"; 
    public $eighteendays = "eighteen";
    public $tweentyDays = "twenty";
    public $tweentyfive = "twentyfive";
    public $thitydays = "thirty";

    // Umrah India package array (moved to mount method)
    public $cities=['mumbai','delhi','lucknow','bangalore'];
    // public $days=['3','5 ','8','10','18','20','25','30',];
    public $days=['three','five','eight','ten','eighteen','twenty','twentyfive','thirty'];
    public $umrahIndia = [];
    public $umrahShort = [];
    public $umrahLong = [];
    public $dummyarray=[];



    // search filter variable for wire model 
    public $searchByCity;
    public $searchByDays;

    public $filtermodel;

    public $title='Mumbai';

    public $bycity;
    public $bydays;


    public function mount()
    {
        $this->umrahPackage();
        $this->umrahShortPackage();
        $this->umrahLongPackage();
        $this->dummyarray = [$this->mb => $this->umrahIndia[$this->mb]];


    }

    





    public function umrahPackage(){
        $this->umrahIndia = [
            //Mumbai
            $this->mb => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa,
                    "sharing" => 72786,
                    "quint" => '',
                    "quad" => 72786,
                    "triple" => 72786,
                    "double" => 72786,
                    "single" => 72786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],                   
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 78786,
                    "quint" => '',
                    "quad" => 80786,
                    "triple" => 84786,
                    "double" => 90786,
                    "single" => 110786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 82786,
                    "quint" => '',
                    "quad" => 84786,
                    "triple" => 88786,
                    "double" => 97786,
                    "single" => 121786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 85786,
                    "quint" => '',
                    "quad" => 88786,
                    "triple" => 93786,
                    "double" => 102786,
                    "single" => 132786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 92786,
                    "quint" => '',
                    "quad" => 97786,
                    "triple" => 104786,
                    "double" => 120786,
                    "single" => 166786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 112786,
                    "triple" => 123786,
                    "double" => 146786,
                    "single" => 214786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => $this->eli,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 126786,
                    "triple" => 137786,
                    "double" => 154786,
                    "single" => 230786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->est => [
                    "id" => 8,
                    "name" => $this->est,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 156786,
                    "triple" => 177786,
                    "double" => 218786,
                    "single" => 358786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => $this->exe,
                    "city" => $this->mb,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 170786,
                    "triple" => 194786,
                    "double" => 243786,
                    "single" => 407786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
            ],

           //Lacknow
            $this->l => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 84786,
                    "quint" => '',
                    "quad" => 85786,
                    "triple" => 86786,
                    "double" => 89786,
                    "single" => 98786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 91786,
                    "quint" => '',
                    "quad" => 93786,
                    "triple" => 97786,
                    "double" => 105786,
                    "single" => 127786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 95786,
                    "quint" => '',
                    "quad" => 98786,
                    "triple" => 102786,
                    "double" => 112786,
                    "single" => 140786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 98786,
                    "quint" => '',
                    "quad" => 101786,
                    "triple" => 107786,
                    "double" => 108786,
                    "single" => 152786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" => 107786,
                    "quint" => '',
                    "quad" => 112786,
                    "triple" => 121786,
                    "double" => 138786,
                    "single" => 191786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => $this->l,
                    "days" => 14,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 130786,
                    "triple" => 143786,
                    "double" => 168786,
                    "single" => 246786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => $this->eli,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 146786,
                    "triple" => 158786,
                    "double" => 177786,
                    "single" => 264786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->est => [
                    "id" => 8,
                    "name" => $this->est,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 180786,
                    "triple" => 203786,
                    "double" => 250786,
                    "single" => 410786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => $this->exe,
                    "city" => $this->l,
                    "days" => 16,
                    "airline" => $this->sa, // Using instance variable
                    "sharing" =>'' ,
                    "quint" => '',
                    "quad" => 195786,
                    "triple" => 223786,
                    "double" => 280786,
                    "single" => 467786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'

                    // "airline" => $this->sa, 
                    // "sharing" => 78786,
                    // "quad" => 79786,
                    // "triple" => 80786,
                    // "double" => 83786,
                    // "single" => 71786,
                ],
            ],

            //Bangalore 
            $this->ban=>[
                $this->ss => [
                    "id" => 1,
                    "name" => "Super Saver",
                    "city" => $this->ban,
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 78786,
                    "quint" => '',
                    "quad" => 79786,
                    "triple" => 80786,
                    "double" => 83786,
                    "single" => 71786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => "Royal",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 84786,
                    "quint" => '',
                    "quad" => 86786,
                    "triple" => 90786,
                    "double" => 96786,
                    "single" => 116786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => "Classic",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 88786,
                    "quint" => '',
                    "quad" => 90786,
                    "triple" => 94786,
                    "double" => 103786,
                    "single" => 127786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->bro => [
                    "id" => 4,
                    "name" => "Bronze",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 91786,
                    "quint" => '',
                    "quad" => 94786,
                    "triple" => 99786,
                    "double" => 108786,
                    "single" => 138786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => "Silver",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 98786,
                    "quint" => '',
                    "quad" => 103786,
                    "triple" => 110786,
                    "double" => 126786,
                    "single" => 172786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => "Gold",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 118786,
                    "triple" => 130786,
                    "double" => 152786,
                    "single" => 220786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => "Elite",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 132786,
                    "triple" => 143786,
                    "double" => 160786,
                    "single" => 236786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->est => [
                    "id" => 8,
                    "name" => "Esteem",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 162786,
                    "triple" => 183786,
                    "double" => 224786,
                    "single" => 364786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => "Executive",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 176786,
                    "triple" => 200786,
                    "double" => 250786,
                    "single" => 413786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
            ],
            
            //Delhi
            $this->del => [
                $this->ss => [
                    "id" => 1,
                    "name" => "Super Saver",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 76786,
                    "quint" => '',
                    "quad" => 77786,
                    "triple" => 79786,
                    "double" => 82786,
                    "single" => 91786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => "Royal",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 83786,
                    "quint" => '',
                    "quad" => 86786,
                    "triple" => 90786,
                    "double" => 97786,
                    "single" => 120786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => "Classic",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 87786,
                    "quint" => '',
                    "quad" => 90786,
                    "triple" => 95786,
                    "double" => 104786,
                    "single" => 133786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->bro => [
                    "id" => 4,
                    "name" => "Bronze",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 91786,
                    "quint" => '',
                    "quad" => 94786,
                    "triple" => 100786,
                    "double" => 111786,
                    "single" => 145786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => "Silver",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => 99786,
                    "quint" => '',
                    "quad" => 104786,
                    "triple" => 113786,
                    "double" => 131786,
                    "single" => 184786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => "Gold",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 122786,
                    "triple" => 135786,
                    "double" => 161786,
                    "single" => 238786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->eli => [
                    "id" => 7,
                    "name" => "Elite",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 138786,
                    "triple" => 150786,
                    "double" => 170786,
                    "single" => 257786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->est => [
                    "id" => 8,
                    "name" => "Esteem",
                    "city" => "Delhi",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 172786,
                    "triple" => 196786,
                    "double" => 243786,
                    "single" => 403786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->exe => [
                    "id" => 9,
                    "name" => "Executive",
                    "city" => "Bangalore",
                    "days" => 16,
                    "airline" => $this->sa, 
                    "sharing" => '',
                    "quint" => '',
                    "quad" => 188786,
                    "triple" => 216786,
                    "double" => 272786,
                    "single" => 459786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'

                ],
            ],

        ];
    }

    
  
    public function umrahShortPackage(){
        $this->umrahShort = [
            $this->threedays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 3,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 25786,
                    "quad" => 26786,
                    "triple" => 27786,
                    "double" => 28786,
                    "single" => 29786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 3,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 27786,
                    "quad" => 28786,
                    "triple" => 29786,
                    "double" => 30786,
                    "single" => 32786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 3,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 28786,
                    "quad" => 29786,
                    "triple" => 30786,
                    "double" => 31786,
                    "single" => 35786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 3,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 29786,
                    "quad" => 30786,
                    "triple" => 31786,
                    "double" => 32786,
                    "single" => 37786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 3,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 30786,
                    "quad" => 32786,
                    "triple" => 35786,
                    "double" => 37786,
                    "single" => 42786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 3,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 32786,
                    "quad" => 33786,
                    "triple" => 37786,
                    "double" => 40786,
                    "single" => 53786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
            ],

            $this->fivedays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 27786,
                    "quad" => 28786,
                    "triple" => 29786,
                    "double" => 30786,
                    "single" => 31786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 29786,
                    "quad" => 30786,
                    "triple" => 31786,
                    "double" => 32786,
                    "single" => 39786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 30786,
                    "quad" => 31786,
                    "triple" => 32786,
                    "double" => 35786,
                    "single" => 44786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 31786,
                    "quad" => 32786,
                    "triple" => 33786,
                    "double" => 37786,
                    "single" => 46786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 33786,
                    "quad" => 34786,
                    "triple" => 36786,
                    "double" => 41786,
                    "single" => 55786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 37786,
                    "quad" => 39786,
                    "triple" => 43786,
                    "double" => 50786,
                    "single" => 72786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
            ],

            $this->eightdays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 8,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 28786,
                    "quad" => 29786,
                    "triple" => 30786,
                    "double" => 31786,
                    "single" => 36786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 8,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 32786,
                    "quad" => 33786,
                    "triple" => 35786,
                    "double" => 39786,
                    "single" => 50786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 8,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 34786,
                    "quad" => 36786,
                    "triple" => 38786,
                    "double" => 44786,
                    "single" => 59786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 35786,
                    "quad" => 37786,
                    "triple" => 40786,
                    "double" => 45786,
                    "single" => 77786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 8,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 39786,
                    "quad" => 41786,
                    "triple" => 45786,
                    "double" => 53786,
                    "single" => 77786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 45786,
                    "quad" => 49786,
                    "triple" => 54786,
                    "double" => 66786,
                    "single" => 99786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
            ],

            $this->tendays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 10,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 29786,
                    "quad" => 31786,
                    "triple" => 32786,
                    "double" => 33786,
                    "single" => 39786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 10,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 34786,
                    "quad" => 35786,
                    "triple" => 38786,
                    "double" => 42786,
                    "single" => 56786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 10,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 37786,
                    "quad" => 39786,
                    "triple" => 42786,
                    "double" => 48786,
                    "single" => 68786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 10,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 38786,
                    "quad" => 40786,
                    "triple" => 44786,
                    "double" => 51786,
                    "single" => 72786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 10,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 42786,
                    "quad" => 45786,
                    "triple" => 50786,
                    "double" => 60786,
                    "single" => 90786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 5,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 51786,
                    "quad" => 55786,
                    "triple" => 62786,
                    "double" => 76786,
                    "single" => 118786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
            ],
        ];
    }

    public function umrahLongPackage(){
        $this->umrahLong = [
            $this->eighteendays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 18,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 34786,
                    "quad" => 36786,
                    "triple" => 38786,
                    "double" => 41786,
                    "single" => 51786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 18,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 42786,
                    "quad" => 45786,
                    "triple" => 49786,
                    "double" => 57786,
                    "single" => 82786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 18,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 48786,
                    "quad" => 51786,
                    "triple" => 57786,
                    "double" => 68786,
                    "single" => 103786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 18,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 50786,
                    "quad" => 54786,
                    "triple" => 60786,
                    "double" => 73786,
                    "single" => 110786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 18,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 57786,
                    "quad" => 63786,
                    "triple" => 72786,
                    "double" => 90786,
                    "single" => 143786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 18,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 72786,
                    "quad" => 80786,
                    "triple" => 93786,
                    "double" => 118786,
                    "single" => 194786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
            ],
            $this->tweentyDays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 20,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 35786,
                    "quad" => 37786,
                    "triple" => 39786,
                    "double" => 43786,
                    "single" => 54786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 20,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 44786,
                    "quad" => 47786,
                    "triple" => 51786,
                    "double" => 61786,
                    "single" => 89786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 20,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 50786,
                    "quad" => 54786,
                    "triple" => 60786,
                    "double" => 73786,
                    "single" => 111786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 20,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 53786,
                    "quad" => 57786,
                    "triple" => 64786,
                    "double" => 78786,
                    "single" => 120786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 20,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 61786,
                    "quad" => 67786,
                    "triple" => 77786,
                    "double" => 97786,
                    "single" => 156786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 20,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 78786,
                    "quad" => 86786,
                    "triple" => 100786,
                    "double" => 128786,
                    "single" => 213786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
            ],
            $this->tweentyfive => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 25,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 38786,
                    "quad" => 41786,
                    "triple" => 43786,
                    "double" => 48786,
                    "single" => 62786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 25,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 49786,
                    "quad" => 53786,
                    "triple" => 58786,
                    "double" => 70786,
                    "single" => 105786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 25,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 57786,
                    "quad" => 62786,
                    "triple" => 70786,
                    "double" => 86786,
                    "single" => 133786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 25,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 60786,
                    "quad" => 66786,
                    "triple" => 74786,
                    "double" => 92786,
                    "single" => 144786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 25,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 70786,
                    "quad" => 78786,
                    "triple" => 90786,
                    "double" => 115786,
                    "single" => 190786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 25,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 91786,
                    "quad" => 102786,
                    "triple" => 119786,
                    "double" => 155786,
                    "single" => 260786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
            ],
            $this->thitydays => [
                $this->ss => [
                    "id" => 1,
                    "name" => $this->ss,
                    "city" => '',
                    "days" => 30,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 41786,
                    "quad" => 44786,
                    "triple" => 47786,
                    "double" => 53786,
                    "single" => 70786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->rl => [
                    "id" => 2,
                    "name" => $this->rl,
                    "city" => '',
                    "days" => 30,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 54786,
                    "quad" => 58786,
                    "triple" => 65786,
                    "double" => 79786,
                    "single" => 122786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ],
                $this->cl => [
                    "id" => 3,
                    "name" => $this->cl,
                    "city" => '',
                    "days" => 30,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 64786,
                    "quad" => 69786,
                    "triple" => 79786,
                    "double" => 98786,
                    "single" => 155786,
                    "image" => 'asserts/user/img/aboutimg2.jpg'
                ],

                $this->bro=> [
                    "id" => 4,
                    "name" => $this->bro,
                    "city" => '',
                    "days" => 30,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 68786,
                    "quad" => 74786,
                    "triple" => 84786,
                    "double" => 105786,
                    "single" => 168786,
                    "image" => 'asserts/user/img/aboutimg3.jpeg'
                ],
                $this->sil => [
                    "id" => 5,
                    "name" => $this->sil,
                    "city" => '',
                    "days" => 30,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 80786,
                    "quad" => 89786,
                    "triple" => 104786,
                    "double" => 133786,
                    "single" => 223786,
                    "image" => 'asserts/user/img/aboutimg4.jpg'
                ],
                $this->gol => [
                    "id" => 6,
                    "name" => $this->gol,
                    "city" => '',
                    "days" => 30,
                    "airline" => '',
                    "sharing" => '',
                    "quint" => 105786,
                    "quad" => 117786,
                    "triple" => 138786,
                    "double" => 181786,
                    "single" => 307786,
                    "image" => 'asserts/user/img/aboutimg1.jpg'
                ], 
            ]
        ];
    }


    #[Layout('user.Layouts.app')]
    public function render()
    {
     // choose  filter type function 
     if($this->filtermodel === '1'){
        $this->bydays=false;
        $this->bycity=true;
        $this->searchByDays='';

    }
    elseif($this->filtermodel === '2'){
        $this->bycity=false;
        $this->bydays=true;
        $this->searchByCity='';

    }
    else{
        $this->filtermodel = '0';
    }

        // search by city filter function 
        if($this->searchByCity === 'mumbai' && $this->filtermodel === '1'){
            $this->title='Mumbai';
            $this->dummyarray = [$this->mb => $this->umrahIndia[$this->mb]];
        }
        elseif($this->searchByCity === 'bangalore'  && $this->filtermodel === '1'){
            $this->title='Bangalore';
            $this->dummyarray = [$this->ban => $this->umrahIndia[$this->ban]];

        }
        elseif($this->searchByCity === 'lucknow'  && $this->filtermodel === '1'){
            $this->title='Lucknow';
            $this->dummyarray = [$this->l => $this->umrahIndia[$this->l]];

        }
        elseif($this->searchByCity === 'delhi'  && $this->filtermodel === '1'){
            $this->title='Delhi';
            $this->dummyarray = [$this->del => $this->umrahIndia[$this->del]];

        }
        else{
            // $this->dummyarray = [$this->mb => $this->umrahIndia[$this->mb]];
            
          
          
        }

       
        

        // search by days filter function 
 
        if($this->searchByDays === "three" && $this->filtermodel === '2' ){
            // dd($this->searchByDays );
            $this->title='3 days';
            $this->dummyarray = [$this->threedays => $this->umrahShort[$this->threedays]];
            // $this->dummyarray = [$this->l => $this->umrahIndia[$this->l]];
            // dd($this->dummyarray);


        }
        elseif($this->searchByDays === "five" && $this->filtermodel === '2'){
            $this->title='5 days';
            // $this->dummyarray = [$this->del => $this->umrahIndia[$this->del]];
            $this->dummyarray = [$this->fivedays => $this->umrahShort[$this->fivedays]];


        }
        elseif($this->searchByDays === "eight" && $this->filtermodel === '2'){
            $this->title='8 days';
            $this->dummyarray = [$this->eightdays => $this->umrahShort[$this->eightdays]];


        }
        elseif($this->searchByDays === "ten" && $this->filtermodel === '2'){
            $this->title='10 days';
            $this->dummyarray = [$this->tendays => $this->umrahShort[$this->tendays]];


        }
        elseif($this->searchByDays === "eighteen" && $this->filtermodel === '2'){
            $this->title='18 days';
            $this->dummyarray = [$this->eighteendays => $this->umrahLong[$this->eighteendays]];


        }
        elseif($this->searchByDays === "twenty" && $this->filtermodel === '2'){
            $this->title='20 days';
            $this->dummyarray = [$this->tweentyDays => $this->umrahLong[$this->tweentyDays]];


        }
        elseif($this->searchByDays === "twentyfive" && $this->filtermodel === '2'){
            $this->title='25 days';
            $this->dummyarray = [$this->tweentyfive => $this->umrahLong[$this->tweentyfive]];


        }
        elseif($this->searchByDays === "thirty" && $this->filtermodel === '2'){
            $this->title='30 days';
            $this->dummyarray = [$this->thitydays => $this->umrahLong[$this->thitydays]];


        }













        // return view('livewire.user_front.dummy.umrah-package-from-india-dummy',[
        //     'filteredPackages' => $filteredPackages,
        //     'cities' => array_keys($this->umrahIndia),
        // ]);
         return view('livewire.user_front.dummy.umrah-package-from-india-dummy',[
            'umrahIndia'=>$this->umrahIndia 
         ]);
    }
}
