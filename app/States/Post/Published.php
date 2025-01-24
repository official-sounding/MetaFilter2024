<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\StatusEnum;

final class Published extends PostState {
    protected static string|StatusEnum $name = StatusEnum::Published->value;
}
