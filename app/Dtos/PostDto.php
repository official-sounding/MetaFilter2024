<?php

declare(strict_types=1);

namespace App\Dtos;

final class PostDto
{
    public function __construct(
        public string $title,
        public ?string $link_url,
        public ?string $link_text,
        public string $body,
        public string $more_inside,
        public int $user_id,
        public int $subsite_id,
        public string $state,
        public ?string $published_at,
        public bool $is_published,
    ) {}
}
