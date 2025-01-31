<?php

declare(strict_types=1);

namespace App\Models;

use Cog\Laravel\Love\Reacterable\ReacterableEloquentBuilderTrait;
use Illuminate\Database\Eloquent\Builder;

final class UserEloquentBuilder extends Builder
{
    use ReacterableEloquentBuilderTrait;
}
