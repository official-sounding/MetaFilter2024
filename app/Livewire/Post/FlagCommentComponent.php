<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Comment;
use App\Services\Markable\FlagCommentService;
use Illuminate\Contracts\View\View;

final class FlagCommentComponent extends BaseFlagComponent
{
    public Comment $comment;
    private FlagCommentService $flagCommentService;
    public array $flagReasons;

    public function boot(FlagCommentService $flagCommentService): void
    {
        $this->flagCommentService = $flagCommentService;
    }

    public function mount(Comment $comment): void
    {
        $this->comment = $comment;
        $this->user = auth()->user() ?? null;

        $this->flagged = $this->flagCommentService->flagged($this->comment, $this->user);
    }

    public function render(): View
    {
        $iconPath = $this->getIconPath();

        return view('livewire.post.flag-component', [
            'iconPath' => $iconPath,
        ]);
    }

    public function delete(): void
    {
        $this->flagCommentService->delete($this->comment, $this->user);
    }

    public function store(): void
    {
        $this->flagCommentService->store($this->comment, $this->user);
    }
}
