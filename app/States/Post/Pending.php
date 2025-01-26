<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\PostStatusEnum;

final class Pending extends PostState
{
    protected static string|PostStatusEnum $name = PostStatusEnum::Pending->value;
}
