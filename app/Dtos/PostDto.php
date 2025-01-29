<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class PostDto
{
    public function __construct(
        public string $title,
        public string $body,
        public string $more_inside,
        public int $subsite_id,
        public string $state,
        public string $published_at,
        public bool $is_published,
    ) {}
}
