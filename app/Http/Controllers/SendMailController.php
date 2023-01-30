<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function show(): string
    {
        Log::info('sending test email');

        $email_origin = 'dieisson.martins.santos@gmail.com';

        $email = new SendMail();

        Mail::to($email_origin)->queue($email);

        #sleep(2);

        return 'teste';
    }
}
