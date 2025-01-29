<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class LocationDto
{
    public function __construct(
        public string $latitude,
        public string $longitude,
    ) {}
}
