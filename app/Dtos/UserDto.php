<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class UserDto
{
    public function __construct(
        public string $username,
        public string $password,
        public string $email,
        public ?string $name,
        public ?bool $homepage_url,
        public string $state,
    ) {}
}
