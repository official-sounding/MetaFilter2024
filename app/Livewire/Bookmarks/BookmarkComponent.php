<?php

declare(strict_types=1);

namespace App\Livewire\Bookmarks;

use App\Models\Comment;
use App\Models\Post;
use App\Traits\TypeTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class BookmarkComponent extends Component
{
    use TypeTrait;

    public Comment|Post $model;
    public int $authorizedUserId;
    public string $iconFilename = 'bookmark';
    public string $titleText = '';
    public string $favoritableType = '';
    public bool $userBookmarked = false;

    public function mount(Comment|Post $model): void
    {
        $this->model = $model;

        $this->favoritableType = $this->getType($this->model);
    }

    public function render(): View
    {
        return view('livewire.bookmarks.bookmark');
    }

}
