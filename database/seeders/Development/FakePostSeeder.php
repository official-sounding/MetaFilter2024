<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Post;
use Illuminate\Database\Seeder;

final class FakePostSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_POSTS = 1500;

    public function run(): void
    {
        Post::factory(self::NUMBER_OF_FAKE_POSTS)->create();
    }
}
