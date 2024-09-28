<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\User;
use App\Traits\FavoriteTrait;
use App\Traits\LoggingTrait;
use Livewire\Component;

class BaseFavoriteComponent extends Component
{
    use FavoriteTrait;
    use LoggingTrait;

    public bool $favorited;
    public int $favorites;
    public ?User $user;
}
