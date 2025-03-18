<?php

declare(strict_types=1);

namespace App\Livewire\Bookmarks;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Traits\LoggingTrait;
use App\Traits\TypeTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Maize\Markable\Exceptions\InvalidMarkValueException;
use Maize\Markable\Models\Bookmark;

final class BookmarkComponent extends Component
{
    use LoggingTrait;
    use TypeTrait;

    public Comment|Post $model;
    public ?User $user;
    public string $iconFilename = 'bookmark';
    public string $titleText = '';
    public bool $userBookmarked = false;

    public function mount(Comment|Post $model): void
    {
        $this->model = $model;
        $this->user = auth()->user() ?? null;

        $this->userBookmarked = !($this->user === null) && Bookmark::has($this->model, $this->user);

        $this->setTitleText();
        $this->setIconFilename();
    }

    public function render(): View
    {
        return view('livewire.bookmarks.bookmark-component');
    }

    public function toggleBookmark(): void
    {
        $this->userBookmarked ? $this->removeBookmark() : $this->addBookmark();
    }

    public function addBookmark(): void
    {
        $this->userBookmarked = true;

        $this->setIconFilename();
        $this->setTitleText();

        try {
            Bookmark::add($this->model, $this->user);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function removeBookmark(): void
    {
        $this->userBookmarked = false;

        $this->setTitleText();
        $this->setIconFilename();

        Bookmark::remove($this->model, $this->user);
    }

    private function setIconFilename(): void
    {
        $this->iconFilename = $this->userBookmarked ? 'bookmark-fill' : 'bookmark';
    }

    private function setTitleText(): void
    {
        $bookmarkText = 'Bookmark this ';

        $this->titleText = $this->userBookmarked ? trans('Remove bookmark') : trans($bookmarkText);
    }
}
