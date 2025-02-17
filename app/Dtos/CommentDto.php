<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class CommentDto {
    public function __construct(
        public string $text,
        public int $postId,
        public int $userId,
        public ?int $parentId = null,
    ) {}
}
