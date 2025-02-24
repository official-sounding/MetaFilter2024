<?php

declare(strict_types=1);

namespace App\Dtos;

readonly class ButtonDto
{
    public function __construct(
        public string $buttonText,
        public string $class,
        public string $iconFilename,
        public string $type,
    ) {}
}
