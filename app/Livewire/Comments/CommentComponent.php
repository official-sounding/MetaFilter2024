<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Enums\LivewireEventEnum;
use App\Models\Comment;
use App\Models\Post;
use App\Traits\CommentComponentTrait;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

final class CommentComponent extends Component
{
    use CommentComponentTrait;

    // Data
    public ?int $authorizedUserId;
    public string $text = '';
    public ?int $parentId = null;
    public int $flagCount = 0;
    public string $flagIconFilename = 'flag';
    public string $flagButtonText = '';
    public int $wordCount = 0;
    public bool $userFlagged = false;

    // State
    public bool $isEditing = false;
    public bool $isFlagging = false;
    public bool $isReplying = false;

    public Comment $comment;
    public CommentForm $commentForm;
    public Post $post;

    public function mount(Comment $comment, Post $post): void
    {
        $this->authorizedUserId = auth()->id() ?? null;

        $this->comment = $comment;
        $this->commentForm->setComment($comment);

        $this->post = $post;

        $this->text = $comment->text;

        $this->wordCount = str_word_count($comment->text);

        $this->flagIconFilename = $this->getIconFilename();
        $this->flagButtonText = $this->getTitleText();
    }

    public function render(): View
    {
        return view('livewire.comments.comment-component');
    }

    private function getIconFilename(): string
    {
        return $this->userFlagged ? 'flag-fill' : 'flag';
    }

    private function getTitleText(): string
    {
        return $this->userFlagged ? trans('Remove flag') : trans('Flag this comment');
    }

    #[On([
        LivewireEventEnum::CommentStored->value,
        LivewireEventEnum::CommentDeleted->value,
        LivewireEventEnum::CommentFlagged->value,
        LivewireEventEnum::CommentUpdated->value,
        LivewireEventEnum::EscapeKeyClicked->value,
    ])]
    public function closeForm(): void
    {
        $this->reset([
            'text',
            'wordCount',
        ]);

        $this->stopEditing();
        $this->stopFlagging();
        $this->stopReplying();
    }
}
