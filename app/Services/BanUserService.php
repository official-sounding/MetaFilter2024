<?php

declare(strict_types=1);

namespace App\Services;

use App\Traits\UserTrait;

final class BanUserService
{
    use UserTrait;

    public function permanentlyBanUser(int $userId): void
    {
        $user = $this->getUserById($userId);

        $user->ban();
    }

    public function temporarilyBanUser(int $userId, string $duration): void
    {
        $user = $this->getUserById($userId);

        $user->ban([
            'expired_at' => $duration,
        ]);
    }

    public function unbanUser(int $userId): void
    {
        $user = $this->getUserById($userId);

        $user->unban();
    }
}
