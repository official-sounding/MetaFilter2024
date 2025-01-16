<?php

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Livewire\Posts\BaseFavoriteComponent;
use App\Models\Comment;
use App\Services\FavoriteCommentService;
use Illuminate\Contracts\View\View;

final class FavoriteCommentComponent extends BaseFavoriteComponent
{
    public Comment $comment;
    private FavoriteCommentService $favoriteCommentService;

    public function boot(FavoriteCommentService $favoriteCommentService): void
    {
        $this->favoriteCommentService = $favoriteCommentService;
    }

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
        $this->user = auth()->user() ?? null;

        $this->favorited = $this->user !== null
            ? $this->favoriteCommentService->favorited($this->comment->id, $this->user->id)
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
        $deleted = $this->favoriteCommentService->delete($this->comment->id, $this->user->id);

        if ($deleted) {
            $this->decrementFavorites();
        } else {
            $this->logError('Failed to delete favorite comment');
        }
    }

    public function store(): void
    {
        $stored = $this->favoriteCommentService->create($this->comment->id, $this->user->id);

        if ($stored) {
            $this->incrementFavorites();
        } else {
            $this->logError('Failed to store favorite comment');
        }
    }
}
