<?php

declare(strict_types=1);

namespace App\Traits;

trait AuthStatusTrait
{
    public function getAuthorizedUserId(): int
    {
        return auth()->id();
    }

    public function loggedIn(): bool
    {
        return auth()->check() === true;
    }

    public function loggedOut(): bool
    {
        return auth()->check() === false;
    }
}
