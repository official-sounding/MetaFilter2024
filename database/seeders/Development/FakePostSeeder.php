<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class FakePostSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_POSTS = 2500;

    public function run(): void
    {
        DB::connection()->disableQueryLog();

        Post::factory(self::NUMBER_OF_FAKE_POSTS)->create();
    }
}
