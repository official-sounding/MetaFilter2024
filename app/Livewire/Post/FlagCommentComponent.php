<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Comment;
use App\Models\User;
use Auth;
use Illuminate\Contracts\View\View;

final class FlagCommentComponent extends BaseFlagComponent
{
    public Comment $comment;
    public User $user;
    public bool $flagged = false;

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
        $this->user = Auth::user();

        $this->flagged = $this->favoriteCommentService->flagged($this->comment, $this->user);
    }

    public function render(): View
    {
        return view('livewire.post.flag-comment-component');
    }
}
