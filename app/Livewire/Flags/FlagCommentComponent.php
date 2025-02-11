<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Http\Requests\Flag\StoreCommentFlagRequest;
use App\Models\Comment;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Services\FlagService;
use Illuminate\Contracts\View\View;

final class FlagCommentComponent extends BaseFlagComponent
{
    private const string FLAGGABLE_TYPE = 'App\Models\Comment';

    public Comment $comment;
    protected FlagReasonRepositoryInterface $flagReasonRepository;
    protected FlagService $flagService;

    public function __construct(
        FlagReasonRepositoryInterface $flagReasonRepository,
        FlagService $flagService
    ) {
        parent::__construct($flagReasonRepository, $flagService);
    }

    public function mount(
        Comment $comment,
    ): void {
        $this->comment = $comment;
    }

    public function render(): View
    {
        return view('livewire.comments.flag-comment-component');
    }

    public function rules(): array
    {
        return (new StoreCommentFlagRequest())->rules();
    }

    public function flagComment(): void
    {
        $this->validate();

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
