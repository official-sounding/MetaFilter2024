<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class FakeCommentSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_COMMENTS = 5000;

    public function run(): void
    {
        DB::connection()->disableQueryLog();

        Comment::factory(self::NUMBER_OF_FAKE_COMMENTS)->create();
    }
}
