<?php

declare(strict_types=1);

namespace App\Builders;

final class FavoriteQueryBuilder extends BaseQueryBuilder
{
    public function __construct($query)
    {
        parent::__construct($query);
    }
}
