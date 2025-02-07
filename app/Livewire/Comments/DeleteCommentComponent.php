<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class DeleteCommentComponent extends Component
{
    public Comment $comment;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
    }

    public function render(): View
    {
        return view('livewire.comments.delete-comment-component');
    }
}
