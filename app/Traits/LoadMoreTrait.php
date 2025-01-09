<?php

declare(strict_types=1);

namespace App\Traits;

trait LoadMoreTrait
{
    public function loadMore(int $page, array $chunks): ?int
    {
        if (!$this->hasMorePages($page, $chunks)) {
            return null;
        }

        return ++$page;
    }

    private function hasMorePages(int $page, array $chunks): bool
    {
        return $page < count($chunks);
    }
}
