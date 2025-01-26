<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\PostStatusEnum;

final class Published extends PostState
{
    protected static string|PostStatusEnum $name = PostStatusEnum::Published->value;
}
