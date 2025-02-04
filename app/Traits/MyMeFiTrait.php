<?php

declare(strict_types=1);

namespace App\Traits;

trait MyMeFiTrait
{
    use SubsiteTrait;

    public function getTitle(): string
    {
        $subdomain = $this->getSubdomain();

        return match ($subdomain) {
            'ask' => trans('MyAsk'),
            default => trans('MyMeFi'),
        };
    }
}
