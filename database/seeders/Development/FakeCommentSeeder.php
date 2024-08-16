<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Comment;
use Illuminate\Database\Seeder;

final class FakeCommentSeeder extends Seeder
{
    private const int NUMBER_OF_FAKE_COMMENTS = 1000;

    public function run(): void
    {
        Comment::factory(self::NUMBER_OF_FAKE_COMMENTS)->create();
    }
}
