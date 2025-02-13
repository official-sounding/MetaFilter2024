<?php

declare(strict_types=1);

namespace App\Builders;

final class PostQueryBuilder extends BaseQueryBuilder
{
    public function __construct($query)
    {
        parent::__construct($query);
    }

    public function popular(): self
    {
        return $this->where('votes', '>', 100);
    }

    public function active(): self
    {
        return $this->where('active', '=', 1);
    }
}
