<?php

declare(strict_types=1);

namespace App\Traits;

trait FeatureTestTrait
{
    public function getFullUrlFromSegment(string $segment): string
    {
        return config('app.testUrl') . $segment;
    }
}
