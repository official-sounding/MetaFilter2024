<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Comment;
use App\Services\FlagCommentService;
use App\Traits\FlagTrait;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;

final class FlagCommentComponent extends BaseFlagComponent
{
    use FlagTrait;

    public string $title;
    public Comment $comment;
    private FlagCommentService $flagCommentService;
    public string $flagEvent;

    public function boot(FlagCommentService $flagCommentService): void
    {
        $this->flagCommentService = $flagCommentService;
    }

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
        $this->title = 'Flag this comment';
        $this->type = 'comment';
        $this->user = auth()->user() ?? null;

        $this->flagged = $this->user !== null
            ? $this->flagCommentService->flagged($this->comment->id, $this->user->id)
            : false;

        $this->iconPath = $this->getIconPath();
    }

    public function render(): View
    {
        $iconPath = $this->getIconPath();

        return view('livewire.post.flag-component')->with([
            'iconPath' => $iconPath,
            'title' => $this->title,
            'type' => $this->type,
        ]);
    }

    #[On('comment-flag-added.{comment.id}')]
    public function flagComment(): void
    {
        $this->incrementFlags();
        $this->flagged = true;
    }
}
