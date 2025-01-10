<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class FakePostSeeder extends Seeder
{
    private const int CHUNK_SIZE = 100;
    private const int NUMBER_OF_FAKE_POSTS = 2000;

    public function run(): void
    {
        DB::connection()->disableQueryLog();

        $posts = Post::factory()->count(self::NUMBER_OF_FAKE_POSTS)->make()->toArray();

        collect($posts)->chunk(self::CHUNK_SIZE)->each(function ($chunk) {
            Post::insert($chunk->toArray());
        });
    }
}
