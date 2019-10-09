<?php

namespace App\Http\Controllers;
use Mail;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Session;

class MailController extends Controller
{
    public function home()
    {

            return view ('admin.contact.sendEmail');

    }
    public function sendEmail(Request $request){

        $this->validate($request,[
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $mail = new SendEmail($subject , $message);
        Mail::to($email)->send($mail);
        Session::flush("success");
        return back();

    }
}
