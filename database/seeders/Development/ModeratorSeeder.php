<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Enums\UserStateEnum;
use App\Models\User;
use App\Traits\ModeratorSeederTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class ModeratorSeeder extends Seeder
{
    use ModeratorSeederTrait;

    public function run(): void
    {
        $moderators = $this->getModeratorsFromJson();

        collect($moderators)->each(function ($moderator) {
            (new User())->updateOrCreate([
                'email' => $moderator['email'],
            ], [
                'name' => $moderator['name'],
                'username' => $moderator['username'],
                'email' => $moderator['email'],
                'legacy_id' => $moderator['legacy_id'],
                'password' => Hash::make('password'),
                'state' => UserStateEnum::Active->value,
            ]);
        });
    }
}
