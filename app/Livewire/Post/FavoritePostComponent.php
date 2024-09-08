<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Post;
use App\Models\User;
use App\Services\Markable\FavoritePostService;
use Illuminate\Contracts\View\View;

final class FavoritePostComponent extends BaseFavoriteComponent
{
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

        $this->favorited = $this->favoritePostService->favorited($this->post, $this->user);
    }

    public function render(): View
    {
        $iconPath = $this->getIconPath();

        return view('livewire.post.favorite-component', [
            'iconPath' => $iconPath,
        ]);
    }
}
