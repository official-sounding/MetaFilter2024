<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Enums\UserStateEnum;
use App\Models\User;
use App\Traits\LoggingTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

final class AdminSeeder extends Seeder
{
    use LoggingTrait;

    public function run(): void
    {
        $path = storage_path('app/imports/metafilter-admins.json');

        if (file_exists($path)) {
            $json = File::get($path);

            $admins = json_decode($json, true);

            collect($admins)->each(function ($admin) {
                (new User())->updateOrCreate([
                    'email' => $admin['email'],
                ], [
                    'name' => $admin['name'],
                    'username' => $admin['username'],
                    'email' => $admin['email'],
                    'is_admin' => $admin['is_admin'],
                    'legacy_id' => $admin['legacy_id'],
                    'password' => Hash::make('password'),
                    'state' => UserStateEnum::Active->value,
                ]);
            });
        } else {
            $this->logDebugMessage('Admins JSON file does not exist at: ' . $path);
        }
    }
}
