<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\UserStateEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

final class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function updateState(User $user, string $state): void
    {
        $user->state = $state;

        $user->save();
    }

    public function getActiveMembers(): Collection
    {
        return $this->model->where('state', '=', UserStateEnum::Active->value)->get();
    }
}
