<?php

declare(strict_types=1);

namespace App\Traits;

use Ramsey\Uuid\Uuid;

trait UuidTrait
{
    public function getUuid(): string
    {
        return (string) Uuid::uuid4();
    }
}
