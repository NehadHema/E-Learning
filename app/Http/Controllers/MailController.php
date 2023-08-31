<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'message'=> 'required|string',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);
        Message::create($request->all());
  
        $data=[
         'message'=>$request->message,
         'name'=>$request->name,
         'email'=>$request->email,
         'subject'=>$request->subject
        ];
        // var_dump($data);
        Mail::to('engnehad2021@gmail.com')->send(new WelcomeMail($data));
      
        return redirect()->back()->with(['message_sent' => 'Your message has been sent successfully!']);  
    }
}
