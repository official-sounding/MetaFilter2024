<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Models\Comment;
use Livewire\Attributes\On;

final class FlagCommentComponent extends BaseFlagComponent
{
    private const string FLAGGABLE_TYPE = 'comment';

    public Comment $comment;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;

        $this->title = trans('Flag this comment');

        $this->userFlagged = $this->hasUserFlagged(
            flaggableType: self::FLAGGABLE_TYPE,
            flaggableId: $this->comment->id,
        );

        $this->iconPath = $this->getIconPath($this->userFlagged);
    }

    #[On('comment-flag-added.{comment.id}')]
    public function storeCommentFlag(): void
    {
        $this->flagService->store([
            'flaggable_type' => self::FLAGGABLE_TYPE,
            'flaggable_id' => $this->comment->id,
            'user_id' => $this->authorizedUserId,
            'note' => $this->note,
        ]);
    }

    #[On('comment-flag-deleted.{comment.id}')]
    public function deleteCommentFlag(): void
    {
        $deleted = $this->flagService->delete(
            flaggableType: self::FLAGGABLE_TYPE,
            flaggableId: $this->comment->id,
            userId: $this->authorizedUserId,
        );

        if ($deleted === true) {
            $this->decrementFlagCount();

            $this->userFlagged = false;
        }
    }
}
