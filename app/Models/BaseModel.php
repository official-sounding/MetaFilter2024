<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $created_at
 * @mixin Builder
*/
abstract class BaseModel extends Model
{
    public function getSlugFrom(string $string): array
    {
        return [
            'slug' => [
                'source' => $string,
            ],
        ];
    }
}
