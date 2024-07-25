<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

final class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
