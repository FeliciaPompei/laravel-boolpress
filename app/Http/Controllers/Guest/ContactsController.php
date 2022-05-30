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

        Mail::to("maildiunadminbool@gmail.com")->send(new SendNewMail($request->guestName, $request->guestEmail, $request->guestMessage));

        return redirect()->route('guest.sent')->with('message', "Thank you $request->guestName!!Your message has been sent correctly");
    }
    public function sent(){
        return redirect('guests.sent');
    }

}
