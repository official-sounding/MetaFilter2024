<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\User;
use Livewire\Component;

class BaseFavoriteComponent extends Component
{
    public bool $favorited = false;
    public int $favorites = 12;
    public ?User $user;

    public function toggleFavorite(): void
    {
        if ($this->favorited) {
            $this->decrementFavorites();
        } else {
            $this->incrementFavorites();
        }

        $this->favorited = ! $this->favorited;
    }

    public function getIconPath(): string
    {
        $iconPath = $this->favorited ? 'heart-fill.svg' : 'heart.svg';

        return "images/icons/$iconPath";
    }

    public function decrementFavorites(): void
    {
        $this->favorites--;
    }

    public function incrementFavorites(): void
    {
        $this->favorites++;
    }
}
