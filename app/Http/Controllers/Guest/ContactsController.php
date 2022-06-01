<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;



class ContactsController extends Controller
{

    public function contact(){
        return view('guests.contact');
    }

    public function contactMailSender(Request $request){

        Mail::to("boolpressAdmin@boolpress.com")->send(new SendNewMail($request->sender, $request->senderEmail, $request->senderMessage));

        return redirect()->route('guests.contact')->with('message', "Thank you $request->sender!!Your message has been sent correctly");
    }
}
