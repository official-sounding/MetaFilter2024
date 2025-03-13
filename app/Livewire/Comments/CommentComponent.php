<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use App\Traits\CommentTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentComponent extends Component
{
    use CommentTrait;

    public bool $isEditing = false;
    public bool $isFlagging = false;
    public bool $isReplying = false;
    public int $wordCount = 0;

    public Comment $comment;
    public CommentForm $form;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
        $this->wordCount = str_word_count($comment->text);
    }

    public function render(): View
    {
        return view('livewire.comments.comment-component');
    }
}
