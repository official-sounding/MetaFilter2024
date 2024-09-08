<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

/**
 * @property string $created_at
 * @mixin Builder
*/
abstract class BaseModel extends Model
{
    use HasTags;

    public function getSlugFrom(string $string): array
    {
        return [
            'slug' => [
                'source' => $string,
            ],
        ];
    }
}
