<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    private $repository;

    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;

    }

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

        $this->repository->add($data);


        return [];
    }
}
