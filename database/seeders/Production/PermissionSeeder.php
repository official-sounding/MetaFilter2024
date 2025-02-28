<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Enums\PermissionEnum;
use App\Traits\PermissionAndRoleTrait;
use App\Traits\StringFormattingTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

final class PermissionSeeder extends Seeder
{
    use PermissionAndRoleTrait;
    use StringFormattingTrait;
    use WithoutModelEvents;

    protected const string GUARD_NAME = 'web';

    public function run(): void
    {
        $this->forgetCachedPermissions();

        $basePermissions = config('metafilter.seeders.base_permissions');
        $resources = config('metafilter.seeders.resources');

        foreach ($basePermissions as $basePermission) {
            foreach ($resources as $resource) {
                $permissionName = "$basePermission $resource";

                $this->addPermission($permissionName);
            }
        }

        $this->createEnumPermissions();

        $this->forgetCachedPermissions();
    }

    private function addPermission(string $permissionName): void
    {
        Permission::findOrCreate($this->getSlug($permissionName), guardName: self::GUARD_NAME);
    }

    private function createEnumPermissions(): void
    {
        foreach (PermissionEnum::cases() as $permission) {
            Permission::findOrCreate($permission->value, guardName: self::GUARD_NAME);
        }
    }
}
