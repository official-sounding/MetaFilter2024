<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\BannerLink;
use App\Traits\CacheTimeTrait;

final class BannerLinkRepository extends BaseRepository implements BannerLinkRepositoryInterface
{
    use CacheTimeTrait;

    private const array COLUMNS = [
            'id',
            'title',
            'url',
    ];

    public function __construct(BannerLink $model)
    {
        parent::__construct($model);
    }

    public function getBannerLinks(int $limit = 3): mixed
    {
        return cache()->remember('banner-links', $this->oneHour(), function () use ($limit) {
            return $this->model->select(self::COLUMNS)
            ->orderBy('created_at')
            ->limit($limit)
            ->get();
        });
    }
}
