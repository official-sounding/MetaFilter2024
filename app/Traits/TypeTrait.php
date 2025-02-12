<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\BaseModel;

trait TypeTrait
{
    private function getType(BaseModel $model): string
    {
        $class = $model::class;

        $type = str_replace(search: 'App\Models\/', replace:'', subject: $class);

        return mb_strtolower($type);
    }
}
