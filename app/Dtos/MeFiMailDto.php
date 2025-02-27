<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class MeFiMailDto
{
    public function __construct(
        public string $subject,
        public string $message,
        public int $sender_id,
        public int $recipient_id,
    ) {}
}
