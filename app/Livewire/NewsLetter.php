<?php

namespace App\Livewire;

use App\Mail\NewsLetterMail;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Newsletter as NewsletterModal;
use Illuminate\Support\Facades\Mail;
use Exception;

class NewsLetter extends Component
{
    public $email;
    public function submit(){
        ($this->email);

        $data=[
            'email'=>$this->email,
        ];
        //dd($data);

        $adminEmail=$this->email;

        NewsletterModal::create([
            'email' => $this->email,
        ]);

        try{
            Mail::to($adminEmail)->send(new NewsLetterMail($data));
            $this->reset(['email']);
            return redirect()->route('layouts.app');
          // dd($succ);
        //    if($succ){
        //     $this->reset(['email']);
        //     return redirect()->route('contact-us')->with('mailSuccess','Your Details Sumbited Thank you for Submition');
        //    }else{
        //      return redirect()->route('about');
        //    }
            // return "mail sended successfully ";
            

        }catch(Exception $e){
            $this->reset(['email']);
            //dd($this->email);
            
            // return $e->getMessage();
            return redirect()->route('layouts.app');
        }
    }
    #[Layout('user.Layouts.app')]
    public function render()
    {
        return view('livewire.user_front.news-letter');
    }
}