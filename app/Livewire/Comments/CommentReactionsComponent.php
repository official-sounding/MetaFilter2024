<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentReactionsComponent extends Component
{
    public Comment $comment;
    public $reactions;
    public array $types;
    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
    }

    public function render(): View
    {
        return view('livewire.comments.comment-reactions-component');
    }

    public function toggleReaction(string $reactionType): void
    {
        $user = auth()->user();
    }
}
