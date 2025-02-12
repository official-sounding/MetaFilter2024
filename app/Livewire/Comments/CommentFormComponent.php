<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
{
    public int $authorizedUserId;
    public string $buttonText = '';
    public Comment $comment;
    public bool $isEditing = false;
    public bool $isReplying = false;
    public string $text = '';
    public int $postId;
    public ?int $parentId = null;
    public ?string $message = null;

    public function mount(
        int $authorizedUserId,
        int $postId,
        Comment $comment,
        ?int $parentId = null,
    ): void {
        $this->authorizedUserId = $authorizedUserId;

        $this->postId = $postId;
        $this->parentId = $parentId;

        $this->comment = $comment;
        $this->text = $this->comment->text ?? '';
    }

    public function render(): View
    {
        return view('livewire.comments.comment-form-component');
    }

    protected function rules(): array
    {
        return (new StoreCommentRequest())->rules();
    }

    public function store(): void
    {
        $this->validate();

        $this->comment = Comment::create([
            'user_id' => $this->user->id,
            'post_id' => $this->postId,
            'parent_id' => $this->parentId,
            'text' => $this->text,
        ]);

        $this->message = trans('Comment created successfully.');
    }
}
