<?php

declare(strict_types=1);

namespace App\Livewire\Admin;

use App\Enums\LivewireEventEnum;
use App\Models\BaseModel;
use App\Models\Watch;
use App\Traits\AuthStatusTrait;
use App\Traits\LoggingTrait;
use App\Traits\TypeTrait;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

final class WatchComponent extends Component
{
    use AuthStatusTrait;
    use LoggingTrait;
    use TypeTrait;

    public BaseModel $model;
    public int $authorizedUserId;
    public string $iconFilename = 'eye';
    public string $titleText = '';
    public int $watchableId;
    public string $watchableType = '';
    public bool $userWatching = false;

    public function mount($model): void
    {
        $this->model = $model;
        $this->watchableId = $this->model->id;
        $this->watchableType = $this->getType($this->model);

        $this->updateWatchData();
    }

    public function render(): View
    {
        return view('livewire.admin.watch-component');
    }

    public function stopWatching(): void
    {
        try {
            $watched = $this->getWatchedModel();

            $watched->delete();
        } catch (Exception $exception) {
            $this->logError($exception);

            return;
        }

        $this->userWatching = false;

        $this->updateWatchData();

        $this->dispatch(LivewireEventEnum::FavoriteDeleted->value);
    }

    public function startWatching(): void
    {
        try {
            $watched = new Watch();

            $watched->admin_id = $this->authorizedUserId;
            $watched->watchable_id = $this->model->id;
            $watched->watchable_type = $this->watchableType;

            $watched->save();
        } catch (Exception $exception) {
            $this->logError($exception);

            return;
        }

        $this->userWatching = true;

        $this->updateWatchData();

        $this->dispatch(LivewireEventEnum::WatchingStarted->value);
    }

    private function getWatchedModel(): Model
    {
        return (new Watch())->where('watchable_id', '=', $this->model->id)
            ->where('watchable_type', '=', $this->watchableType)
            ->where('user_id', '=', $this->authorizedUserId)
            ->sole();
    }

    private function updateWatchData(): void
    {
        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->iconFilename = $this->getIconFilename();
        $this->titleText = $this->getTitleText();
    }

    private function getIconFilename(): string
    {
        return $this->userWatching ? 'eye-fill' : 'eye';
    }

    private function getTitleText(): string
    {
        $favoriteText = 'Watch this ' . $this->watchableType;

        return $this->userWatching ? trans('Stop watching') : trans($favoriteText);
    }
}
