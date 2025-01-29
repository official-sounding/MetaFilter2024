<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\PermissionEnum;
use App\Enums\RoleNameEnum;
use App\Traits\LoggingTrait;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

final class RoleSeeder extends Seeder
{
    use LoggingTrait;
    use WithoutModelEvents;

    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        DB::beginTransaction();

        try {
            $moderatorRole = $this->createModeratorRole();

            $this->assignModeratorPermissions($moderatorRole);

            $this->createDeveloperRoleWithPermissions();

            $this->assignControlPanelAccess();

            DB::commit();
        } catch (Exception $exception) {
            $this->logError($exception);

            DB::rollback();
        }

        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    private function createModeratorRole(): Role
    {
        return Role::create([
            'name' => RoleNameEnum::MODERATOR->label(),
        ]);
    }

    private function assignModeratorPermissions(Role $role): void
    {
        $permissions = config('metafilter.seeders.permissions');
        $resources = config('metafilter.seeders.resources');

        foreach ($permissions as $permission) {
            foreach ($resources as $resource) {
                $permission = mb_strtolower($permission);

                $compoundPermission = "$permission $resource";

                $this->givePermissionToRole($role, $compoundPermission);
            }
        }
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

            $this->givePermissionToRole($role, PermissionEnum::AccessPanel->value);
        }
    }

    private function getRole(string $roleName): Role
    {
        return DB::table('roles')->where('name', '=', $roleName)->firstOrFail();
    }

    private function givePermissionToRole(Role $role, string $permission): void
    {
        $role->givePermissionTo($permission);
    }
}
