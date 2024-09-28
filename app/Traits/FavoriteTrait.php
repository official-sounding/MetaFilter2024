<?php

declare(strict_types=1);

namespace App\Traits;

trait FavoriteTrait
{
    public function getIconPath(): string
    {
        $iconPath = $this->favorited ? 'heart-fill.svg' : 'heart.svg';

        return "images/icons/$iconPath";
    }

    public function toggleFavorite(): void
    {
        if ($this->favorited) {
            $this->delete();
        } else {
            $this->store();
        }

        $this->favorited = ! $this->favorited;
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
