<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Enums\UserStateEnum;
use App\Models\User;
use App\Traits\AdminSeederTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class AdminSeeder extends Seeder
{
    use AdminSeederTrait;

    public function run(): void
    {
        $admins = $this->getAdminsFromJson();

        collect($admins)->each(function ($admin) {
            (new User())->updateOrCreate([
                'email' => $admin['email'],
            ], [
                'name' => $admin['name'],
                'username' => $admin['username'],
                'email' => $admin['email'],
                'legacy_id' => $admin['legacy_id'],
                'password' => Hash::make('password'),
                'state' => UserStateEnum::Active->value,
            ]);
        });
    }
}
