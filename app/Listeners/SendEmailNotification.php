<?php

namespace App\Listeners;

use App\Events\DataSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;

class SendEmailNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(DataSaved $event): void
    {
        $title = "Welcome to Funny Coder";
        $body = "HNB";
        Mail::to('vithursan1003@gmail.com')->send(new sendEmail($title, $body));
        echo "Email sent successfully";
    }
}
