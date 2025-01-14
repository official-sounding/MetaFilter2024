<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

final class UserService
{
    public function store(array $data): User
    {
        $user = new User();

        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->name = $data['name'];
        $user->homepage_url = $data['homepage_url'];

        $user->save();

        return $user;
    }
}
