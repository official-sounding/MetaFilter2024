<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Comment;
use App\Models\Post;
use App\Traits\LoggingTrait;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class FakePostSeeder extends Seeder
{
    use LoggingTrait;

    private const int CHUNK_SIZE = 50;
    private const int MAX_COMMENTS_PER_POST = 20;
    private const int NUMBER_OF_FAKE_POSTS = 2500;
    private const array DATETIME_FIELDS = [
        'created_at',
        'updated_at',
        'published_at',
    ];

    public function run(): void
    {
        DB::connection()->disableQueryLog();

        collect(range(1, self::NUMBER_OF_FAKE_POSTS))
            ->chunk(self::CHUNK_SIZE)
            ->each(
                function ($chunk) {
                    $chunk->map(
                        function () {
                            $post = Post::factory()->create();

                            foreach (self::DATETIME_FIELDS as $field) {
                                if (isset($post[$field]) && $post[$field]) {
                                    $post[$field] = Carbon::parse($post[$field])->format('Y-m-d H:i:s');
                                }
                            }

                            $numberOfComments = mt_rand(1, self::MAX_COMMENTS_PER_POST);

                            Comment::factory($numberOfComments)
                                ->for($post)
                                ->create();
                        },
                    );
                },
            );
    }
}
