<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class ContactMessageDto
{
    public function __construct(
        public string $name,
        public string $email,
        public string $subject,
        public string $message,
        public bool $copySender,
    ) {}
}
