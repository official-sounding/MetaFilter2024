<?php

declare(strict_types=1);

namespace App\Traits;

trait PopularPostTrait
{
    use SubsiteTrait;

    public function getTitle(): string
    {
        $subdomain = $this->getSubdomainFromUrl();

        return match ($subdomain) {
            'ask' => 'Popular Questions',
            default => 'Popular Posts',
        };
    }
}
