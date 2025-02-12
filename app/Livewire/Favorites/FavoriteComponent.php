<?php

/** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace App\Livewire\Favorites;

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
    public int $favoriteCount = 0;
    public string $iconFilename = 'heart';
    public string $titleText = '';
    public string $type;
    public bool $userFavorited = false;

    protected FavoriteService $favoriteService;

    public function mount(
        $model,
        FavoriteService $favoriteService
    ): void {
        $this->model = $model;

        $this->type = $this->getType($model);

        $this->iconFilename = $this->getIconFilename();
        $this->titleText = $this->getTitleText();

        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->favoriteService = $favoriteService;

        $this->updateFavoriteData();
    }

    public function render(): View
    {
        return view('livewire.favorites.favorites-component');
    }

    public function toggleFavorite(): void
    {
        $this->userFavorited = !$this->userFavorited;

        if ($this->userFavorited) {

        } else {
            $this->userFavorited = !$this->userFavorited;
        }

        $this->updateFavoriteData();
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

    private function updateFavoriteData(): void
    {
        $this->favoriteCount = $this->model->favorites()->count();

        $this->userFavorited = $this->favoriteService->userFavorited(
            favoritableType: $this->type,
            favoritableId: $this->favoriteCount,
            userId:  $this->authorizedUserId
        );
    }
}
