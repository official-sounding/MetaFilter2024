<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\User;
use App\Traits\LoggingTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

final class AdminSeeder extends Seeder
{
    use LoggingTrait;

    public function run(): void
    {
        $path = storage_path('app/imports/metafilter-admins.json');

        $json = File::get($path);

        $admins = json_decode($json);

        User::upsert($admins, ['email']);
    }
}
