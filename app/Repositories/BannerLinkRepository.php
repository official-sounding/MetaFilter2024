<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\BannerLink;
use App\Traits\CacheTimeTrait;
use Illuminate\Support\Facades\Cache;

final class BannerLinkRepository extends BaseRepository implements BannerLinkRepositoryInterface
{
    use CacheTimeTrait;

    private const int LINKS_TO_SHOW = 3;

    public function __construct(BannerLink $model)
    {
        parent::__construct($model);
    }

    public function getBannerLinks(): mixed
    {
        return Cache::remember('banner-links', $this->oneHour(), function () {
            return BannerLink::select([
                'id',
                'title',
                'url',
            ])
            ->orderBy('created_at')
            ->limit(self::LINKS_TO_SHOW)
            ->get();
        });
    }
}
