<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\UserDto;
use App\Models\User;

final class UserService
{
    public function store(UserDto $dto): User
    {
        $user = new User();

        $user->username = $dto->username;
        $user->email = $dto->email;
        $user->password = bcrypt($dto->password);
        $user->name = $dto->name;
        $user->homepage_url = $dto->homepage_url;

        $user->save();

        return $user;
    }

    public function update(User $user, array $data): void
    {
        $user->update($data);
    }

}
