<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Comment;
use App\Services\Markable\FavoriteCommentService;
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
        $this->user = auth()->user();

        $this->favorited = $this->favoriteCommentService->favorited($this->comment, $this->user);
    }

    public function render(): View
    {
        $iconPath = $this->getIconPath();

        return view('livewire.post.favorite-component', [
            'iconPath' => $iconPath,
        ]);
    }

    public function delete(): void
    {
        $this->favoriteCommentService->delete($this->comment, $this->user);
    }

    public function store(): void
    {
        $this->favoriteCommentService->store($this->comment, $this->user);
    }
}
