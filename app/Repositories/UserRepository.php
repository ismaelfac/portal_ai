<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\{ User };
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return new User();
    }

    public function created($data)
    {
        return  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'isActive' => true
        ]);
    }
}
