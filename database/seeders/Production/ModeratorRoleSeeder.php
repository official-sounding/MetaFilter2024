<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\RoleNameEnum;
use App\Models\User;
use App\Traits\LoggingTrait;
use App\Traits\ModeratorSeederTrait;
use App\Traits\PermissionAndRoleTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class ModeratorRoleSeeder extends Seeder
{
    use LoggingTrait;
    use ModeratorSeederTrait;
    use PermissionAndRoleTrait;
    use WithoutModelEvents;

    public function run(): void
    {
        $this->forgetCachedPermissions();

        $moderators = $this->getModeratorsFromJson();

        collect($moderators)->each(function ($moderator) {
            $user = (new User())->where('email', '=', $moderator['email'])->first();

            if ($user) {

                $user->assignRole(RoleNameEnum::MODERATOR->label());

            } else {
                $this->logDebugMessage($moderator['email'] . ' not listed in database');
            }
        });

        $this->forgetCachedPermissions();
    }
}
