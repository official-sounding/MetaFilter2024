<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dtos\UserDto;
use App\Models\User;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function createUser(UserDto $dto);

    public function updateState(User $user, string $state);
}
