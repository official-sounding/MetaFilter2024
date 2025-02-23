<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\PermissionEnum;
use App\Enums\RoleNameEnum;
use App\Traits\LoggingTrait;
use App\Traits\PermissionAndRoleTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Throwable;

final class RoleSeeder extends Seeder
{
    use LoggingTrait;
    use PermissionAndRoleTrait;
    use WithoutModelEvents;

    /**
     * @throws Throwable
     */
    public function run(): void
    {
        $this->forgetCachedPermissions();

        DB::beginTransaction();

        try {
            $this->createModeratorRole();

            $this->createDeveloperRoleWithPermissions();

            $this->assignControlPanelAccess();

            DB::commit();
        } catch (Throwable $exception) {
            $this->logError($exception);

            DB::rollback();
        }

        $this->forgetCachedPermissions();
    }

    private function createModeratorRole(): Role
    {
        return Role::create([
            'name' => RoleNameEnum::MODERATOR->value,
        ]);
    }


    private function createDeveloperRoleWithPermissions(): void
    {
        $role = Role::create([
            'name' => RoleNameEnum::DEVELOPER->value,
        ]);

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
