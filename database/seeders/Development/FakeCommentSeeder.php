<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class FakeCommentSeeder extends Seeder
{
    private const int CHUNK_SIZE = 100;
    private const int NUMBER_OF_FAKE_COMMENTS = 5000;

    public function run(): void
    {
        DB::connection()->disableQueryLog();

        $comments = Comment::factory()->count(self::NUMBER_OF_FAKE_COMMENTS)->make()->toArray();

        collect($comments)->chunk(self::CHUNK_SIZE)->each(function ($chunk) {
            Comment::insert($chunk->toArray());
        });
    }
}
