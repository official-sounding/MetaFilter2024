<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use Illuminate\Database\Seeder;
use Spatie\Tags\Tag;

final class FakeTagSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_TAGS = 1000;

    public function run(): void
    {
        Tag::factory(self::NUMBER_OF_FAKE_TAGS)->create();
    }
}
