<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Traits\StringFormattingTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;

final class PermissionSeeder extends Seeder
{
    use StringFormattingTrait;
    use WithoutModelEvents;

    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $basePermissions = config('metafilter.seeders.base_permissions');
        $resources = config('metafilter.seeders.resources');

        foreach ($basePermissions as $basePermission) {
            foreach ($resources as $resource) {
                $permissionName = "$basePermission $resource";

                $this->addPermission($permissionName);
            }
        }

        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    private function addPermission(string $permissionName): void
    {
        $permission = new Permission();

        $permission->name = $this->getSlug($permissionName);

        $permission->save();
    }
}
