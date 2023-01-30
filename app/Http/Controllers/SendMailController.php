<?php

namespace App\Http\Controllers;

use App\Events\SendMail;

class SendMailController extends Controller
{
    public function show($email_origin): string
    {
        SendMail::dispatch($email_origin);

        return "email added to queue;";
    }
}
