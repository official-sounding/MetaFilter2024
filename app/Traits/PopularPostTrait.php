<?php

declare(strict_types=1);

namespace App\Traits;

trait PopularPostTrait
{
    use SubsiteTrait;

    public function getTitle(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => trans('Popular Questions'),
            default => trans('Popular Posts'),
        };
    }
}
