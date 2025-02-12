<?php

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Models\BaseModel;
use App\Traits\AuthStatusTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FavoriteButtonComponent extends Component
{
    use AuthStatusTrait;

    public BaseModel $model;
    public int $authorizedUserId;
    public int $favoritesCount;
    public string $iconFilename = 'heart';
    public bool $isFavorited;
    public string $titleText;

    public function mount(BaseModel $model): void
    {
        $this->authorizedUserId = $this->getAuthorizedUserId();

        $this->model = $model;

        $this->favoritesCount = $model->favorites()->count();
        $this->isFavorited = $model->isFavorited();
    }

    public function render(): View
    {
        return view('livewire.favorites.favorites-component');
    }

    public function toggleFavorite(): void
    {
        if ($this->isFavorited) {
            $this->model->favorites()->where('user_id', '=', $this->authorizedUserId)->delete();

            $this->isFavorited = false;

            $this->favoritesCount--;
        } else {
            $this->model->favorites()->create([
                'user_id' => $this->authorizedUserId,
            ]);

            $this->isFavorited = true;

            $this->favoritesCount++;
        }

        $this->titleText = $this->isFavorited ? trans('Remove favorite') : trans('Add favorite');

        $this->iconFilename = $this->isFavorited ? trans('heart-fill') : trans('heart');
    }

    private function setTitleText(): void
    {
        $modelName = mb_strtolower($this->model::class);

        $this->titleText = $this->isFavorited ? trans('Remove favorite') : trans('Add favorite ') . trans($modelName);
    }

    private function getIconFilename(): void
    {
        $this->iconFilename = $this->isFavorited ? trans('heart-fill') : trans('heart');
    }
}
