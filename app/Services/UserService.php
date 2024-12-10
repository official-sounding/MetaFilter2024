<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;

final class UserService
{
    public function store(StoreUserRequest $request): User
    {
        return User::create($request->validated());
    }
}
