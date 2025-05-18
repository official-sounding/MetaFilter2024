<?php

declare(strict_types=1);

namespace Database\Seeders\Development;

use App\Models\Comment;
use App\Models\Post;
use App\Traits\LoggingTrait;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

final class FakePostSeeder extends Seeder
{
    use LoggingTrait;

    private const int CHUNK_SIZE = 20;
    private const int MAX_COMMENTS_PER_POST = 20;
    private const int NUMBER_OF_FAKE_POSTS = 2500;

    private function log(string $message, string $level = 'info'): void
    {
        if ($level === 'info') {
            $this->logInfo($message);
            $this->command?->info($message);
        } elseif ($level === 'error') {
            $this->logDebugMessage($message);
            $this->command?->error($message);
        }
    }

    /**
     * @throws Throwable
     */
    public function run(): void
    {
        DB::connection()->disableQueryLog();
        $this->log('Starting to seed ' . self::NUMBER_OF_FAKE_POSTS . ' fake posts');

        $totalChunks = ceil(self::NUMBER_OF_FAKE_POSTS / self::CHUNK_SIZE);
        $postsCreated = 0;

        for ($chunkIndex = 0; $chunkIndex < $totalChunks; $chunkIndex++) {
            $remainingPosts = self::NUMBER_OF_FAKE_POSTS - $postsCreated;
            $currentChunkSize = min(self::CHUNK_SIZE, $remainingPosts);

            try {
                DB::beginTransaction();
            } catch (Throwable $exception) {
                $this->logError($exception);
            }

            try {
                for ($i = 0; $i < $currentChunkSize; $i++) {
                    $post = Post::factory()->create();

                    $numberOfComments = mt_rand(1, self::MAX_COMMENTS_PER_POST);

                    Comment::factory($numberOfComments)
                        ->for($post)
                        ->create();

                    $postsCreated++;
                }

                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();

                $errorMessage = 'Error in chunk ' . ($chunkIndex + 1) . ': ' . $e->getMessage();
                $this->logError($e, $errorMessage);

                $this->command?->error($errorMessage);

                throw $e;
            } catch (Throwable $exception) {
                $this->logError($exception);
            }

            // Force garbage collection after each chunk to free memory
            if (function_exists('gc_collect_cycles')) {
                gc_collect_cycles();
            }
        }

        $this->log('Completed seeding ' . $postsCreated . ' fake posts with comments');
    }
}
