<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\PermissionEnum;
use App\Enums\RoleNameEnum;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

trait PermissionAndRoleTrait
{
    public function canAccessAdminPanel(): bool
    {
        return auth()->check() && auth()->user()->can(PermissionEnum::AccessAdminPanel->value);
    }

    public function forgetCachedPermissions(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function getRole(string $roleName): Role
    {
        return Role::where('name', '=', $roleName)->firstOrFail();
    }

    public function givePermissionToRole(Role $role, string $permission): void
    {
        $role->givePermissionTo($permission);
    }

    public function isBoardMember(): bool
    {
        return $this->isLoggedInAndHasRole(RoleNameEnum::BOARD_MEMBER->value);
    }

    public function isDeveloper(): bool
    {
        return $this->isLoggedInAndHasRole(RoleNameEnum::DEVELOPER->value);
    }

    public function isModerator(): bool
    {
        return $this->isLoggedInAndHasRole(RoleNameEnum::MODERATOR->value);
    }

    private function isLoggedInAndHasRole(string $roleName): bool
    {
        return auth()->check() && auth()->user()->hasRole($roleName);
    }
}
