<?php

namespace App\Http\Controllers;

use App\Models\intel;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller{
    public function contact(){
        return view('pages.contact');
    }

    public function sendEmail(Request $Request){
        $details = [
            'name' => $Request->name,
            'phone' => $Request->phone,
            'msg' => $Request->msg,
            'email' => $Request->email,
        ];
        Mail::to('hopetype79@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','sent');
    }

}


