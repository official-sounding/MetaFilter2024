<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class FakeCommentSeeder extends Seeder
{
    private const int CHUNK_SIZE = 100;
    private const array DATETIME_FIELDS = [
        'created_at',
        'updated_at',
        'published_at',
    ];
    private const int NUMBER_OF_FAKE_COMMENTS = 7500;

    public function run(): void
    {
        DB::connection()->disableQueryLog();

        collect(range(1, self::NUMBER_OF_FAKE_COMMENTS))
            ->chunk(self::CHUNK_SIZE)
            ->each(
                function ($chunk) {
                    $comments = $chunk->map(function () {
                        $comment = Comment::factory()->make()->toArray();

                        foreach (self::DATETIME_FIELDS as $field) {
                            if (isset($comment[$field]) && $comment[$field]) {
                                $comment[$field] = Carbon::parse($comment[$field])->format('Y-m-d H:i:s');
                            }
                        }

                        return $comment;
                    })->toArray();

                    Comment::insert($comments);
                },
            );
    }
}
