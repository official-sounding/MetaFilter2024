<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;

final class UserService
{
    public function __construct(
        protected UserRepositoryInterface $userRepository,
    ) {}

    public function store(StoreUserRequest $request): User
    {
        return $this->userRepository->create($request->validated());
    }
}
