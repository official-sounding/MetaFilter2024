<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class TableColumnDto
{
    public function __construct(
        public string $key,
        public string $label,
        public bool $isHeader = false,
        public ?string $route = null,
    ) {}
}
