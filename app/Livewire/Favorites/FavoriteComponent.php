<?php

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Traits\LoggingTrait;
use App\Traits\TypeTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Maize\Markable\Exceptions\InvalidMarkValueException;
use Maize\Markable\Models\Favorite;

final class FavoriteComponent extends Component
{
    use LoggingTrait;
    use TypeTrait;

    public Comment|Post $model;
    public ?User $user;
    public string $iconFilename = 'heart';
    public string $titleText = '';
    public bool $userFavorited = false;
    public int $favoriteCount = 0;

    public function mount(Comment|Post $model): void
    {
        $this->model = $model;
        $this->user = auth()->user() ?? null;

        $this->favoriteCount = Favorite::count($this->model);
        $this->userFavorited = !($this->user === null) && Favorite::has($this->model, $this->user);

        $this->setIconFilename();
        $this->setTitleText();
    }

    public function render(): View
    {
        return view('livewire.favorites.favorite-component');
    }

    public function addFavorite(): void
    {
        $this->userFavorited = true;
        $this->favoriteCount++;

        $this->setIconFilename();
        $this->setTitleText();

        try {
            Favorite::add($this->model, $this->user);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function removeFavorite(): void
    {
        $this->userFavorited = false;
        $this->favoriteCount--;

        $this->setIconFilename();
        $this->setTitleText();

        Favorite::remove($this->model, $this->user);
    }

    private function setIconFilename(): void
    {
        $this->iconFilename = $this->userFavorited ? 'heart-fill' : 'heart';
    }

    private function setTitleText(): void
    {
        $favoriteText = 'Favorite this ';

        $this->titleText = $this->userFavorited ? trans('Remove favorite') : trans($favoriteText);
    }
}
