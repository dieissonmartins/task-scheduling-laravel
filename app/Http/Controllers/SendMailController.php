<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendMailController extends Controller
{
    /**
     * @param $email_origin
     * @return string
     */
    public function show($email_origin): string
    {
        SendMail::dispatch($email_origin);

        return "email added to queue;";
    }

    # methods nao functional someones para testes

    /**
     * @param Request $request
     * @return array
     */
    public function store(Request $request): array
    {
        $data = $request->all();

        DB::transaction(function () use ($data, &$user) {

            $user = User::create($data);

        });

        return [
            'data' => $user
        ];
    }
}
