<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentShowComponent extends Component
{
    public Comment $comment;
    public bool $editing = false;
    public bool $replying = false;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
    }

    public function render(): View
    {
        return view('livewire.comments.comment-show-component');
    }

    public function startEditing(): void
    {
        $this->editing = true;
        $this->replying = false;
    }

    public function startReplying(): void
    {
        $this->editing = false;
        $this->replying = true;
    }

    public function cancelEditing(): void
    {
        $this->editing = false;
    }

    public function cancelReplying(): void
    {
        $this->replying = false;
    }

    private function commentCreated(): void
    {
        $this->cancelReplying();
    }

    private function commentUpdated(): void
    {
        $this->editing = false;
    }

    public function hideCommentForm(): void
    {
        $this->cancelReplying();
        $this->cancelEditing();
    }

    public function deleteComment(): void
    {
        $this->comment->delete();
    }
}
