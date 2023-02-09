<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersRepository
{
    public function add(array $data): User
    {
        # qtd tentative transaction
        $tentatives = 3;

        $user = DB::transaction(function () use ($data) {

            $user = User::create($data);

            return $user;

        }, $tentatives);

        $ret = $user;

        return $ret;
    }
}
