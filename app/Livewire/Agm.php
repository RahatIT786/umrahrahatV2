<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Agm extends Component
{
   public $events;
   public $agms;
   public $awards;

    public function mount(){
        $this->eventDetails();
        $this->agmDetails();
        $this->awardDetails();
    }


   public function eventDetails(){
    $eventPath='newImg/awardimages/event/';
    $top='top';
    $ctr='center';
    $btm='bottom';

    $this->events=[
        ['title'=>'Exclusive invitation to Top 10 Umrah Companies of INDIA',
        'imgPath'=>$eventPath.'ent1.jpg',
        'position'=>$top, ],

        ['title'=>'Agreement Signing with the One of the top Five Star Hotel in Makka.',
        'imgPath'=>$eventPath.'ent2.jpg',
        'position'=>$top, ],

        ['title'=>'Meeting Managers of Top FIVE STAR Hotels in Nusuk Road Show',
        'imgPath'=>$eventPath.'ent3.jpg',
        'position'=>$top, ],

        ['title'=>'Top Honors - Receiving the Gilaaf e Kaaba from his Excellency himself in
NUSUK Road Show.',
        'imgPath'=>$eventPath.'ent4.jpeg',
    'position'=>$top, ],

        ['title'=>'emorandum Signing with NUSUK & Saudi Ministry of Tourism.',
        'imgPath'=>$eventPath.'ent5.jpg',
    'position'=>$ctr, ],

        ['title'=>'Top 10 Umrah Companies of India - Meet in Nusuk Road Show',
        'imgPath'=>$eventPath.'ent6.jpg',
    'position'=>$top, ],

        ['title'=>' President of APAC Markets at Saudi Tourism Authority',
        'imgPath'=>$eventPath.'ent7.jpeg',
    'position'=>$top, ],

        ['title'=>'Invited to Prestigious Saudi Airlines Award Programme in Trident',
        'imgPath'=>$eventPath.'ent8.jpg', 
    'position'=>$top,],

        ['title'=>'Mr. Imran & Mr. Fahad attend the meeting of Top 10 Umrah Companies
of India Nusuk Road Show (Mumbai)',
        'imgPath'=>$eventPath.'ent9.jpg',
    'position'=>$ctr, ],

        ['title'=>'Agreement Signing with the TOP Umrah Companies in Madina',
        'imgPath'=>$eventPath.'ent10.jpg',
        'position'=>$ctr, ],

        ['title'=>'Signing of Umrah Agreements in Umrah and Ziyarat Forum Madina',
        'imgPath'=>$eventPath.'ent11.jpg', 
    'position'=>$ctr,],

        ['title'=>'Proud participant in the exclusive Fam trip organized by Saudi Tourism',
        'imgPath'=>$eventPath.'ent12.jpg',
    'position'=>$top, ],

       
    ];


    
   }




   public function agmDetails(){
    $agmPath='newImg/awardimages/agm/';
    $top='top';
    $ctr='center';
    $btm='bottom';

    $this->agms=[
        ['title'=>'title',
            'imgPath'=>$agmPath.'agm1.jpg',
            'position'=>$top],
            ['title'=>'title',
            'imgPath'=>$agmPath.'agm2.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm3.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm4.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm5.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm6.jpg',
            'position'=>$top],
            ['title'=>'title',
            'imgPath'=>$agmPath.'agm7.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm8.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm9.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm10.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm11.jpg',
            'position'=>$top],
            ['title'=>'title',
            'imgPath'=>$agmPath.'agm12.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm13.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm14.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm15.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm16.jpg',
            'position'=>$top],
            ['title'=>'title',
            'imgPath'=>$agmPath.'agm17.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm18.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm19.jpg',
            'position'=>$top],

            ['title'=>'title',
            'imgPath'=>$agmPath.'agm20.jpg',
            'position'=>$top],
            ['title'=>'title',
            'imgPath'=>$agmPath.'agm21.jpg',
            'position'=>$top],



    ];

   

    
   }



   public function awardDetails(){
    $awardPath='newImg/awardimages/award/';
    $top='top';
    $ctr='center';
    $btm='bottom';

    $this->awards=[
        ['title'=>'7th Iconic Achievers Award 2024',
        'imgPath'=>$awardPath.'award1.jpg',
        'position'=>$top,],

        ['title'=>'INDIGO Best seller Award given to RAHAT TRAVELS OF INDIA',
        'imgPath'=>$awardPath.'award2.jpg',
        'position'=>$top,],

        ['title'=>'Saudi Airlines - Best Performance Award 2019',
        'imgPath'=>$awardPath.'award3.jpg',
        'position'=>$top,],

        ['title'=>'Celebrating Excellence: Rahat Travel of India Wins',
        'imgPath'=>$awardPath.'award4.jpg',
        'position'=>$top,],

        ['title'=>'NUSUK and STA Rewards Top 10 Umrah Co.',
        'imgPath'=>$awardPath.'award5.jpg',
        'position'=>$top,],

        ['title'=>'His Highness Minister of Hajj and Umrah Mr. Tawfiq',
        'imgPath'=>$awardPath.'award6.jpg',
        'position'=>$top,],

        ['title'=>'Most Umra Visa in a Calendar Year',
        'imgPath'=>$awardPath.'award7.jpg',
        'position'=>$top,],

        ['title'=>'National Award for Best Umrah Tour',
        'imgPath'=>$awardPath.'award8.jpg',
        'position'=>$top,],

        ['title'=>'Saudi Tourism Authority Signs MOU with Rahat Group',
        'imgPath'=>$awardPath.'award9.jpg',
        'position'=>$top,],
        
        ['title'=>'PULLMAN Zamzam Makkah 5* - Best Partner',
        'imgPath'=>$awardPath.'award10.jpg',
        'position'=>$top,],

        ['title'=>'Jawharat al Rasheed Hotel Madina - Best Partner.',
        'imgPath'=>$awardPath.'award11.jpg',
        'position'=>$top,],

        ['title'=>'State Award (Delhi) For Best Umrah Tour',
        'imgPath'=>$awardPath.'award12.jpg',
        'position'=>$top,],

        ['title'=>'National Award for Best Hajj & Umrah Tour Of India',
        'imgPath'=>$awardPath.'award13.jpg',
        'position'=>$top,],

        ['title'=>'Team Saudi Airlines Rewards Rahat Group',
        'imgPath'=>$awardPath.'award14.jpg',
        'position'=>$top,],
        
        ['title'=>'DEAFA GROUP Makka - Best Travel Partner',
        'imgPath'=>$awardPath.'award15.jpg',
        'position'=>$top,],

        ['title'=>'Best Performance from Makarem AL Jubail for Umrah',
        'imgPath'=>$awardPath.'award16.jpg',
        'position'=>$top,],

        ['title'=>'Best Social Services Award from Gul Bootey',
        'imgPath'=>$awardPath.'award17.jpg',
        'position'=>$top,],

        ['title'=>'Best Performance from Makarem AL Jubail for Umrah',
        'imgPath'=>$awardPath.'award18.jpg',
        'position'=>$top,],

        ['title'=>'Best Social Services Award from Gul Bootey',
        'imgPath'=>$awardPath.'award19.jpg',
        'position'=>$top,],
        
        ['title'=>'Excellence Award from Deafa Group Makka',
        'imgPath'=>$awardPath.'award20.jpg',
        'position'=>$top,],

        ['title'=>'Best Performance by Mobily, Saudi Arabia',
        'imgPath'=>$awardPath.'award21.jpg',
        'position'=>$top,],

        // ['title'=>'',
        // 'imgPath'=>$awardPath.'award22.jpg',
        // 'position'=>$top,],

        ['title'=>'Anjum Hotel Makka - Hajj 2023',
        'imgPath'=>$awardPath.'award23.jpg',
        'position'=>$top,],

        ['title'=>'Fastest Growing Indian Company Excellence Award.',
        'imgPath'=>$awardPath.'award24.jpg',
        'position'=>$top,],
        
        ['title'=>'Best Performance for Hajj from Moullim No 65.',
        'imgPath'=>$awardPath.'award25.jpg',
        'position'=>$top,],

        ['title'=>'ANJUM Hotel Makka 5* - Best Travel Partner',
        'imgPath'=>$awardPath.'award26.jpg',
        'position'=>$ctr,],
        
        ['title'=>'His Highness Minister of Hajj and Umrah Mr. Tawfiq',
        'imgPath'=>$awardPath.'award27.jpg',
        'position'=>$top,],
    ];


    
   }











    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.agm');
    }
}
