<?php

declare(strict_types=1);

namespace App\Models;

use Cog\Laravel\Love\Reactable\ReactableEloquentBuilderTrait;
use Illuminate\Database\Eloquent\Builder;

final class CommentEloquentBuilder extends Builder {
    use ReactableEloquentBuilderTrait;
}
