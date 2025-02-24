<?php

declare(strict_types=1);

namespace App\Dtos;

final class TableColumnDto
{
    public function __construct(
        public string $key,
        public string $label,
        public bool $isHeader = false,
        public ?string $route = null,
    ) {}
}
