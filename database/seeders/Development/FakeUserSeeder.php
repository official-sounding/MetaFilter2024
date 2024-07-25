<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\User;
use Illuminate\Database\Seeder;

final class FakeUserSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_USERS = 1000;

    public function run(): void
    {
        User::factory()
            ->count(self::NUMBER_OF_FAKE_USERS)
            ->create();
    }
}
