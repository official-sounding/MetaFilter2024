<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Enums\LivewireEventEnum;
use App\Models\Comment;
use App\Services\FlagCommentService;

final class FlagCommentFormComponent extends BaseFlagFormComponent
{
    private const string FLAGGABLE_TYPE = 'App\Models\Comment';

    public Comment $comment;

    private FlagCommentService $flagCommentService;

    public function boot(FlagCommentService $flagCommentService): void
    {
        $this->flagCommentService = $flagCommentService;
    }

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;

        $this->flagFormId = 'flag-comment-form-' . $this->comment->id;

        $this->type = 'comment';
    }

    public function store(): void
    {
        $validated = $this->validate();

        $commentId = $this->comment->id;

        $data = [
            'user_id' => $this->user->id,
            'flag_reason_id' => $validated['flag_reason_id'],
            'note' => $validated['note'],
            'flaggable_type' => self::FLAGGABLE_TYPE,
            'flaggable_id' => $commentId,
        ];

        $stored = $this->flagCommentService->create($data);

        if ($stored) {
            $this->dispatch(LivewireEventEnum::CommentFlagAdded->value, id: $commentId);
        } else {
            $this->logError('Failed to store comment flag');
        }
    }
}
