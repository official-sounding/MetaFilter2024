<?php

declare(strict_types=1);

namespace App\Traits;

trait FormRequestTrait
{
    public function loggedIn(): bool
    {
        return auth()->check();
    }

    public function loggedOut(): bool
    {
        return !auth()->check();
    }
}
