<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use AllowDynamicProperties;
use App\Models\BaseModel;
use App\Models\Flag;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\FlagRepositoryInterface;
use App\Traits\AuthStatusTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

#[AllowDynamicProperties]
final class FlagComponent extends Component
{
    use AuthStatusTrait;

    public BaseModel $model;
    public int $authorizedUserId;
    public int $flagCount = 0;
    public $flagged = false;
    public string $iconFilename = 'flag';
    public string $note = '';
    public array $reasons = [];
    public int $reasonId = 0;
    public string $titleText;

    protected FlagRepositoryInterface $flagRepository;
    protected FlagReasonRepositoryInterface $flagReasonRepository;

    public function mount(
        $model,
        FlagRepositoryInterface $flagRepository,
        FlagReasonRepositoryInterface $flagReasonRepository
    ): void {
        $this->authorizedUserId = $this->getAuthorizedUserId();

        $this->flagRepository = $flagRepository;
        $this->flagReasonRepository = $flagReasonRepository;

        $this->reasons = $this->flagReasonRepository->getDropdownValues('text');

        $this->model = $model;

        $this->updateFlagData();
    }

    public function render(): View
    {
        return view('livewire.flags.flag-component');
    }

    public function updateFlagData(): void
    {
        $this->flagCount = $this->model->flags()->count();
        $this->flagged = $this->model->flags()->where('user_id', '=', $this->authorizedUserId)->exists();

        $this->setTitleText();

        $this->getIconFilename();
    }

    public function addFlag($reasonId): void
    {
        if ($reasonId === 'note') {
            $this->dispatch('flagWithNote', $this->model->id);
            return;
        }

        Flag::create([
            'comment_id' => $this->model->id,
            'user_id' => $this->authorizedUserId,
            'reason_id' => $reasonId,
            'note' => null
        ]);

        $this->flagged = true;
        $this->flagCount++;
    }

    public function removeFlag(): void
    {
        Flag::where('comment_id', $this->model->id)
            ->where('user_id', '=', $this->authorizedUserId)
            ->delete();

        $this->flagged = false;

        $this->flagCount = $this->flagCount <= 1 ? 0 : $this->flagCount--;
    }

    private function setTitleText(): void
    {
        $modelName = mb_strtolower($this->model::class);

        $this->titleText =  $this->userFlagged ? trans('Remove flag') : trans('Flag this ') . trans($modelName);
    }

    private function getIconFilename(): void
    {
        $this->iconFilename = $this->userFlagged ? trans('flag-fill') : trans('flag');
    }
}
// app/Http/Livewire/CommentFlags.php

/*

    public function addFlag(): void
    {
        (new Flag)->updateOrCreate(
            [
                'user_id' => $this->authorizedUserId,
                'comment_id' => $this->model->id
            ],
            [
                'reason_id' => $this->reasonId ?? null,
                'note' => $this->note ?? null
            ]
        );

        $this->updateFlagData();

        $this->showForm = false;
    }

    public function removeFlag(): void
    {
        $this->model->flags()->where('user_id', '=', $this->authorizedUserId)->delete();

        $this->updateFlagData();
    }
class CommentFlags extends Component
{

    public function mount(Comment $comment)
    {
        $this->comment = $comment;
        $this->flagCount = $comment->flags()->count();
        $this->flagged = $comment->flags()->where('user_id', $this->authorizedUserId)->exists();
        $this->reasons = FlagReason::all();
    }

}
