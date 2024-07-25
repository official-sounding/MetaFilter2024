<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Post;
use Carbon\Carbon;

trait PostTrait
{
    public function isArchived(Post $post): bool
    {
        $archiveDate = now()->subDays(30);
        $postDate = $post->created_at;

        return $postDate <= $archiveDate;
    }

    public function getTimestamp(Post $post): array
    {
        return [
            'icon' => $post->created_at->gt(Carbon::now()->subDay()) ? 'icon-clock' : 'icon-calendar',
            'datetime' => $post->created_at->format('Y-m-d H:i:d'),
            'diffForHumans' => $post->created_at->diffForHumans(),
        ];
    }
}
