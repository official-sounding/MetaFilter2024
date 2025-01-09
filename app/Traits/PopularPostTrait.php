<?php

declare(strict_types=1);

namespace App\Traits;

trait PopularPostTrait
{
    public function getTitle(string $subdomain): string
    {
        return match ($subdomain) {
            'ask' => 'Popular Questions',
            default => 'Popular Posts',
        };
    }
}
