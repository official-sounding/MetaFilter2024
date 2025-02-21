<?php

/** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Enums\LivewireEventEnum;
use App\Models\BaseModel;
use App\Models\Favorite;
use App\Traits\AuthStatusTrait;
use App\Traits\LoggingTrait;
use App\Traits\TypeTrait;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FavoriteComponent extends Component
{
    use AuthStatusTrait;
    use LoggingTrait;
    use TypeTrait;

    public BaseModel $model;
    public int $authorizedUserId;
    public int $favoritableId;
    public int $favoriteCount = 0;
    public string $iconFilename = 'heart';
    public string $titleText = '';
    public string $favoritableType = '';
    public bool $userFavorited = false;

    public function mount($model): void
    {
        $this->model = $model;

        $this->favoritableId = $this->model->id;

        $this->favoritableType = $this->getType($this->model);

        $this->updateFavoriteData();
    }

    public function render(): View
    {
        return view('livewire.favorites.favorite-component');
    }

    public function addFavorite(): void
    {
        try {
            $favorite = new Favorite();

            $favorite->favoritable_id = $this->model->id;
            $favorite->favoritable_type = $this->favoritableType;
            $favorite->user_id = $this->authorizedUserId;

            $favorite->save();
        } catch (Exception $exception) {
            $this->logError($exception);

            return;
        }

        $this->userFavorited = true;

        $this->updateFavoriteData();

        $this->dispatch(LivewireEventEnum::FavoriteStored->value);
    }

    public function removeFavorite(): void
    {
        try {
            $favorite = $this->getFavorite();

            $favorite->delete();
        } catch (Exception $exception) {
            $this->logError($exception);

            return;
        }

        $this->userFavorited = false;

        $this->updateFavoriteData();

        $this->dispatch(LivewireEventEnum::FavoriteDeleted->value);
    }

    private function getFavorite()
    {
        return Favorite::where('favoritable_id', '=', $this->model->id)
            ->where('favoritable_type', '=', $this->favoritableType)
            ->where('user_id', '=', $this->authorizedUserId)
            ->first();
    }

    private function updateFavoriteData(): void
    {
        $this->favoriteCount = $this->model->favorites()->count();

        $this->iconFilename = $this->getIconFilename();

        $this->titleText = $this->getTitleText();

        $this->authorizedUserId = $this->getAuthorizedUserId();
    }

    private function getIconFilename(): string
    {
        return $this->userFavorited ? 'heart-fill' : 'heart';
    }

    private function getTitleText(): string
    {
        $favoriteText = 'Favorite this ' . $this->favoritableType;

        return $this->userFavorited ? trans('Remove favorite') : trans($favoriteText);
    }
}
