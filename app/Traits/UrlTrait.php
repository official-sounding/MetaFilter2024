<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RouteNameEnum;

trait UrlTrait
{
    public function getDateUrl(int $targetYear): string
    {
        $currentYear = date('Y');

        return route(RouteNameEnum::MetaFilterArchivesIndex, [
            'day' => date('d'),
            'month' => date('m'),
            'year' => $currentYear - $targetYear,
        ]);
    }

    public function getUrlSegment(int $segment): ?string
    {
        return request()->segment($segment);
    }

    public function useSecureProtocol(string $url): string
    {
        return str_replace(search: 'http://', replace: 'https://', subject: $url);
    }
}
