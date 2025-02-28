<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\PermissionEnum;
use App\Enums\RoleNameEnum;
use App\Traits\LoggingTrait;
use App\Traits\PermissionAndRoleTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

final class RoleSeeder extends Seeder
{
    use LoggingTrait;
    use PermissionAndRoleTrait;
    use WithoutModelEvents;

    protected const string GUARD_NAME = 'web';

    public function run(): void
    {
        $this->forgetCachedPermissions();

        $this->createBoardMemberRole();
        $this->createModeratorRole();
        $this->createDeveloperRoleWithPermissions();

        $this->assignControlPanelAccess();

        $this->forgetCachedPermissions();
    }

    private function createModeratorRole(): Role
    {
        return Role::findOrCreate(
            name: RoleNameEnum::MODERATOR->value,
            guardName: self::GUARD_NAME,
        );
    }

    private function createBoardMemberRole(): Role
    {
        return Role::findOrCreate(
            name: RoleNameEnum::BOARD_MEMBER->value,
            guardName: self::GUARD_NAME,
        );
    }

    private function createDeveloperRoleWithPermissions(): void
    {
        $role = Role::findOrCreate(
            name: RoleNameEnum::DEVELOPER->value,
            guardName: self::GUARD_NAME,
        );

        $role->givePermissionTo(Permission::all());
    }

    private function assignControlPanelAccess(): void
    {
        foreach (RoleNameEnum::cases() as $roleName) {
            $role = $this->getRole($roleName->value);

            $this->givePermissionToRole($role, PermissionEnum::AccessAdminPanel->value);
        }
    }
}
