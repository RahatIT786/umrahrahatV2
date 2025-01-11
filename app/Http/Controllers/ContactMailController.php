<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function sendDetails(Request $request){
        $validated=$request->validate([
            'name'=>'required|string|max:35',
            'mail'=>'required|email|max:50',
            'subject'=>'required|string',
            'message'=>'required|string',

        ]);


        $data=[
            'name'=>$validated['name'],
            'mail'=>$validated['mail'],
            'subject'=>$validated['subject'],
            'message'=>$validated['message'],
        ];


        $adminEmail='rahatitsolution786@gmail.com';
        try{
            Mail::to($adminEmail)->send(new ContactMail($data));
            // return "mail sended successfully ";
            return redirect()->route('contact-us')->with('mailSuccess','Your Details Sumbited Thank you for Submition');

        }catch(Exception $e){
            // return $e->getMessage();
            return redirect()->route('contact-us')->with('mailSuccess','Your Details Not Submited');
        }
        

        
        // return redirect()->route('contact-us')->with('mailSuccess','Your Details Sumbited Thank you for Submition');
    }
}
