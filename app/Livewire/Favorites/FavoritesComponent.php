<?php

declare(strict_types=1);

namespace App\Livewire\Favorites;

use App\Models\BaseModel;
use App\Services\FavoriteService;
use App\Traits\AuthStatusTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FavoritesComponent extends Component
{
    use AuthStatusTrait;

    public BaseModel $model;
    public int $authorizedUserId;
    public int $flagCount = 0;
    public string $iconFilename = 'favorite';
    public bool $showForm = false;
    public string $titleText;

    protected FavoriteService $favoriteService;

    public function mount(
        $model,
        FavoriteService $favoriteService
    ): void {
        $this->model = $model;

        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->favoriteService = $favoriteService;

        $this->setIconFilename();
        $this->setTitleText();
        $this->updateFavoriteData();
    }

    public function render(): View
    {
        return view('livewire.favorites.favorites-component');
    }

    public function toggleForm(): void
    {
        $this->showForm = !$this->showForm;
    }

    private function setIconFilename(): void
    {
        $this->iconFilename = $this->userFlagged ? 'flag-fill' : 'flag';
    }

    private function setTitleText(): void
    {
        $flagText = 'Flag this ' . $this->type;

        $this->titleText =  $this->userFlagged ? trans('Remove flag') : trans($flagText);
    }

    private function updateFavoriteData() {}

}
