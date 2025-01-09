<?php

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Livewire\Post\BaseFavoriteComponent;
use App\Models\Post;
use App\Services\FavoritePostService;
use Illuminate\Contracts\View\View;

final class FavoritePostComponent extends BaseFavoriteComponent
{
    public int $favorites;
    public Post $post;
    private FavoritePostService $favoritePostService;

    public function boot(FavoritePostService $favoritePostService): void
    {
        $this->favoritePostService = $favoritePostService;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->user = auth()->user() ?? null;

        $this->favorited = $this->user !== null
            ? $this->favoritePostService->favorited($this->post->id, $this->user->id)
            : false;
    }

    public function render(): View
    {
        $iconPath = $this->getIconPath();

        return view('livewire.favorites.favorite-component')->with([
            'iconPath' => $iconPath,
        ]);
    }

    public function delete(): void
    {
        $deleted = $this->favoritePostService->delete($this->post->id, $this->user->id);

        if ($deleted) {
            $this->decrementFavorites();
        } else {
            $this->logError('Failed to delete favorite post');
        }
    }

    public function store(): void
    {
        $stored = $this->favoritePostService->create($this->post->id, $this->user->id);

        if ($stored) {
            $this->incrementFavorites();
        } else {
            $this->logError('Failed to store favorite post');
        }
    }
}
