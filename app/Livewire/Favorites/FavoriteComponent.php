<?php

/** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Dtos\FavoriteDto;
use App\Enums\LivewireEventEnum;
use App\Models\BaseModel;
use App\Services\FavoriteService;
use App\Traits\AuthStatusTrait;
use App\Traits\TypeTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FavoriteComponent extends Component
{
    use AuthStatusTrait;
    use TypeTrait;

    public BaseModel $model;
    public int $authorizedUserId;
    public int $favoritableId;
    public int $favoriteCount = 0;
    public string $iconFilename = 'heart';
    public string $titleText = '';
    public string $favoritableType = '';
    public bool $userFavorited = false;

    protected FavoriteService $favoriteService;

    public function mount(
        $model,
        FavoriteService $favoriteService,
    ): void {
        $this->model = $model;

        $this->favoritableId = $this->model->id;

        $this->favoritableType = $this->getType($this->model);

        $this->favoriteService = $favoriteService;

        $this->updateFavoriteData();
    }

    public function render(): View
    {
        return view('livewire.favorites.favorite-component');
    }

    public function store(): void
    {
        $dto = new FavoriteDto(
            favoritableType: $this->favoritableType,
            favoritableId: $this->model->id,
            userId: $this->authorizedUserId,
        );

        $stored = $this->favoriteService->store($dto);

        if ($stored === true) {
            $this->userFavorited = true;

            $this->updateFavoriteData();

            $this->dispatch(LivewireEventEnum::FavoriteStored->value);
        }
    }

    public function removeFavorite(): void
    {
        $removed = $this->favoriteService->delete(
            favoritableType: $this->favoritableType,
            favoritableId: $this->model->id,
            userId: $this->authorizedUserId,
        );

        if ($removed === true) {
            $this->userFavorited = false;

            $this->updateFavoriteData();

            $this->dispatch(LivewireEventEnum::FavoriteDeleted->value);
        }
    }

    private function updateFavoriteData(): void
    {
        $this->favoriteCount = $this->model->favorites()->count();

        $this->iconFilename = $this->getIconFilename();

        $this->titleText = $this->getTitleText();

        $this->authorizedUserId = $this->getAuthorizedUserId();

        $this->userFavorited = $this->favoriteService->userFavorited(
            favoritableType: $this->favoritableType,
            favoritableId: $this->favoriteCount,
            userId: $this->authorizedUserId,
        );
    }

    private function getIconFilename(): string
    {
        return $this->userFavorited ? 'heart-fill' : 'heart';
    }

    private function getTitleText(): string
    {
        $favoriteText = 'Favorite this ' . $this->type;

        return $this->userFavorited ? trans('Remove favorite') : trans($favoriteText);
    }
}
