<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\RoleNameEnum;
use App\Models\User;
use App\Traits\LoggingTrait;
use App\Traits\ModeratorSeederTrait;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

final class ModeratorRoleSeeder extends Seeder
{
    use LoggingTrait;
    use ModeratorSeederTrait;

    public function run(): void
    {
        $moderators = $this->getModeratorsFromJson();

        collect($moderators)->each(function ($moderator) {
            $user = (new User())->where('email', '=', $moderator['email'])->first();

            if ($user) {
                app()[PermissionRegistrar::class]->forgetCachedPermissions();

                $user->assignRole(RoleNameEnum::MODERATOR->label());

                app()[PermissionRegistrar::class]->forgetCachedPermissions();
            } else {
                $this->logDebugMessage($moderator['email'] . ' not listed in database');
            }
        });
    }
}
