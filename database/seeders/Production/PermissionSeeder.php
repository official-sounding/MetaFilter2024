<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;

final class PermissionSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $permissions = config('metafilter.seeders.permissions');

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        foreach ($permissions as $name) {
            $permission = new Permission();

            $permission->name = $name;

            $permission->save();
        }

        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
