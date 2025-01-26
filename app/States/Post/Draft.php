<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\PostStateEnum;

final class Draft extends PostState
{
    protected static string|PostStateEnum $name = PostStateEnum::Draft->value;
}
