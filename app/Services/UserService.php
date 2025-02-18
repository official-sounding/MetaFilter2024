<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\UserDto;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;

final class UserService
{
    use LoggingTrait;

    public function __construct(
        protected UserRepositoryInterface $userRepository,
    ) {}

    public function store(UserDto $dto): ?User
    {
        try {
            $user = new User();

            $user->username = $dto->username;
            $user->password = bcrypt($dto->password);
            $user->email = $dto->email;
            $user->name = $dto->name;
            $user->homepage_url = $dto->homepage_url;
            $user->state = $dto->state;

            $user->save();

            return $user;
        } catch (Exception $exception) {
            $this->logError($exception);

            return null;
        }
    }

    public function update(User $user, array $data): void
    {
        $user->update($data);
    }

    public function updateState(User $user, string $value): void
    {
        $user->state = $value;

        $user->save();
    }
}
