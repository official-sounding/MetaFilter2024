<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Post;
use App\Models\User;
use App\Services\Markable\FavoritePostService;
use Auth;
use Illuminate\Contracts\View\View;

final class FavoritePostComponent extends BaseFavoriteComponent
{
    public Post $post;
    public User $user;

    private FavoritePostService $favoritePostService;

    public function boot(FavoritePostService $favoritePostService): void
    {
        $this->favoritePostService = $favoritePostService;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->user = Auth::user();

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
