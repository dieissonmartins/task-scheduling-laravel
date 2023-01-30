<?php

namespace App\Listeners;

use App\Events\SendMail as SendMailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param SendMailEvent $event
     * @return void
     */
    public function handle(SendMailEvent $event)
    {
        $email_origin = $event->email_origin;

        $email = new \App\Mail\SendMail();

        Mail::to($email_origin)->queue($email);
    }
}
