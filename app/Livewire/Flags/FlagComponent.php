<?php /** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Models\BaseModel;
use App\Services\FlagService;
use App\Traits\AuthStatusTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FlagComponent extends Component
{
    use AuthStatusTrait;

    // TODO: Check that model is post or comment
    public BaseModel $model;
    public int $authorizedUserId;
    public int $flagCount = 0;
    public int $flaggableId = 0;
    public int $flagReasonId = 0;
    public string $iconFilename = 'flag';
    public string $note = '';
    public array $flagReasons = [];
    public bool $showForm = false;
    public string $titleText;
    public string $type;
    public $userFlagged = false;

    protected FlagService $flagService;

    public function mount(
        $model,
        FlagService $flagService
    ): void {
        $this->model = $model;
        $this->flaggableId = $this->model->id;
        $this->type = mb_strtolower($this->model::class);

        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->flagService = $flagService;
        $this->flagReasons = $this->flagService->getFlagReasons();

        $this->setTitleText();
        $this->getIconFilename();
        $this->updateFlagData();
    }

    public function render(): View
    {
        return view('livewire.flags.flag-component');
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

    public function store(int $flaggableId): void
    {
        $stored = $this->flagService->store([
            'flaggable_type' => $this->type,
            'flaggable_id' => $flaggableId,
            'flag_reason_id' => $this->flagReasonId,
            'user_id' => $this->authorizedUserId,
            'note' => $this->note,
        ]);

        if ($stored === true) {
            $this->updateFlagData();

            $this->userFlagged = true;
        }
    }

    public function toggleForm(): void
    {
        $this->showForm = !$this->showForm;
    }

    private function setTitleText(): void
    {
        $this->titleText =  $this->userFlagged ? trans('Remove flag') : trans('Flag this ') . trans($this->type);
    }

    private function getIconFilename(): void
    {
        $this->iconFilename = $this->userFlagged ? 'flag-fill' : 'flag';
    }
}
