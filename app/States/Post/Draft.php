<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\PostStatusEnum;

final class Draft extends PostState
{
    protected static string|PostStatusEnum $name = PostStatusEnum::Draft->value;
}
