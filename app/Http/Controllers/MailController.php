<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function sendEmail(Request $request){
        $title = "Welcome to Funny Coder";
        $body = $request;
        Mail::to('vithursan1003@gmail.com')->send(new sendEmail($title, $body));

        return "Email sent successfully";

    }
}
