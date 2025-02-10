<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

final class CommentShowComponent extends Component
{
    public Comment $comment;
    public bool $isEditing = false;
    public bool $isReplying = false;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
    }

    public function render(): View
    {
        return view('livewire.comments.comment-show-component');
    }

    public function toggleEditing(): void
    {
        if ($this->isEditing === true) {
            $this->stopEditing();
        } else {
            $this->startEditing();
        }
    }

    public function toggleReplying(): void
    {
        if ($this->isReplying === true) {
            $this->stopReplying();
        } else {
            $this->startReplying();
        }
    }

    public function startEditing(): void
    {
        $this->isEditing = true;
        $this->stopReplying();
    }

    public function stopEditing(): void
    {
        $this->isEditing = false;
    }

    public function startReplying(): void
    {
        $this->isReplying = true;
        $this->stopEditing();
    }

    public function stopReplying(): void
    {
        $this->isReplying = false;
    }

    #[On('escape-key-clicked')]
    public function closeForm(): void
    {
        $this->stopEditing();
        $this->stopReplying();
    }
}
