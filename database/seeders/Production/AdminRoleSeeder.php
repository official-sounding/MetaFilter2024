<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\RoleNameEnum;
use App\Models\User;
use App\Traits\LoggingTrait;
use App\Traits\AdminSeederTrait;
use App\Traits\PermissionAndRoleTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class AdminRoleSeeder extends Seeder
{
    use LoggingTrait;
    use AdminSeederTrait;
    use PermissionAndRoleTrait;
    use WithoutModelEvents;

    public function run(): void
    {
        $this->forgetCachedPermissions();

        $admins = $this->getAdminsFromJson();

        collect($admins)->each(function ($admin) {
            $user = (new User())->where('email', '=', $admin['email'])->first();

            if ($user) {
                $user->assignRole(RoleNameEnum::MODERATOR->label());

            } else {
                $this->logDebugMessage($admin['email'] . ' not listed in database');
            }
        });

        $this->forgetCachedPermissions();
    }
}
