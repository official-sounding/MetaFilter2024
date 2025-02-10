<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\FlagRepositoryInterface;
use App\Traits\AuthStatusTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FlagCommentComponent extends Component
{
    use AuthStatusTrait;

    public Comment $comment;
    public array $flagReasons = [];
    public string $note = '';
    public int $authorizedUserId;
    public int $selectedReasonId;
    public int $flagCount = 0;
    public bool $userFlagged = false;
    public bool $showForm = false;
    public bool $showNoteField = false;

    protected FlagReasonRepositoryInterface $flagReasonRepository;
    protected FlagRepositoryInterface $flagRepository;

    public function mount(
        Comment $comment,
        FlagReasonRepositoryInterface $flagReasonRepository,
        FlagRepositoryInterface $flagRepository,
    ): void {
        $this->comment = $comment;

        $this->flagReasonRepository = $flagReasonRepository;
        $this->flagRepository = $flagRepository;

        $this->flagReasons = $this->flagReasonRepository->all();

        $this->authorizedUserId = $this->getAuthorizedUserId();

        $this->updateFlagData();
    }

    public function render(): View
    {
        return view('livewire.comments.flag-comment-component');
    }

    public function toggleForm(): void
    {
        $this->showForm = !$this->showForm;
    }

    public function flagComment(): void
    {
        if (!$this->selectedReasonId) {
            return;
        }

        $data = [
            'user_id' => $this->authorizedUserId,
            'comment_id' => $this->comment->id,
            'reason_id' => $this->selectedReasonId,
            'note' => $this->note,
        ];

        $this->flagRepository->updateOrCreate($data);

        $this->updateFlagData();

        $this->showForm = false;
    }

    public function removeFlag(): void
    {
        $this->comment->flags()->where('user_id', '=', $this->authorizedUserId)->delete();

        $this->updateFlagData();
    }

    public function updateFlagData(): void
    {
        $this->flagCount = $this->comment->flags()->count();

        $this->userFlagged = $this->comment->flags()->where('user_id', '=', $this->authorizedUserId)->exists();
    }
}
