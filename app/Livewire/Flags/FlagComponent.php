<?php

/** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Models\BaseModel;
use App\Services\FlagService;
use App\Traits\AuthStatusTrait;
use App\Traits\TypeTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FlagComponent extends Component
{
    use AuthStatusTrait;
    use TypeTrait;

    private const string FLAG_WITH_NOTE = 'flag-with-note';
    private const string MODEL_PATH = 'App\Models\/';

    // TODO: Check that model is post or comment
    public BaseModel $model;
    public int $authorizedUserId;
    public int $flagCount = 0;
    public int $flaggableId = 0;
    public int $flagReasonId = 0;
    public string $iconFilename = 'flag';
    public string $note = '';
    public array $flagReasons = [];
    public string $selectedReason = '';
    public bool $showForm = false;
    public bool $showNoteField = false;
    public string $titleText;
    public string $type = '';
    public bool $userFlagged = false;

    protected FlagService $flagService;

    public function boot(FlagService $flagService): void
    {
        $this->flagService = $flagService;
    }

    public function mount(
        $model,
    ): void {
        $this->model = $model;
        $this->flaggableId = $this->model->id;
        $this->type = $this->getType($model);

        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->flagReasons = $this->flagService->getFlagReasons();

        $this->setIconFilename();
        $this->setTitleText();
        $this->updateFlagData();
    }

    public function render(): View
    {
        return view('livewire.flags.flag-component');
    }

    public function store(): void
    {
        $stored = $this->flagService->store([
            'flaggable_type' => $this->type,
            'flaggable_id' => $this->model->id,
            'flag_reason_id' => $this->flagReasonId,
            'user_id' => $this->authorizedUserId,
            'note' => $this->note,
        ]);

        if ($stored === true) {
            $this->userFlagged = true;

            $this->updateFlagData();
        }
    }

    public function flagReasonSelected(string $selectedReason): void
    {
        if ($selectedReason === self::FLAG_WITH_NOTE) {
            $this->showNoteField = true;
        } else {
            $this->showNoteField = false;
            $this->note = '';
        }

        $this->selectedReason = $selectedReason;
    }

    public function updateFlagData(): void
    {
        $this->flagCount = $this->model->flags()->count();
        $this->userFlagged = $this->model->flags()->where('user_id', '=', $this->authorizedUserId)->exists();
    }

    public function delete(int $flaggableId): void
    {
        $deleted = $this->flagService->delete(
            flaggableType: $this->type,
            flaggableId: $flaggableId,
            userId: $this->authorizedUserId,
        );

        if ($deleted === true) {
            $this->updateFlagData();

            $this->userFlagged = false;
        }
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
}
