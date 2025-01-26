<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\PostStateEnum;

final class Pending extends PostState
{
    protected static string|PostStateEnum $name = PostStateEnum::Pending->value;
}
