<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class TableColumnDto
{
    public function __construct(
        public string $key,
        public string $label,
        public bool $isRowHeader = false,
        public ?string $route = null,
        public ?string $dateFormat = null,
    ) {}
}
