<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Dtos\CommentDto;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use App\Services\CommentService;
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

    public function store(CommentService $commentService): void
    {
        $this->validate();

        $dto = new CommentDto(
            text: $this->text,
            postId: $this->postId,
            userId: $this->authorizedUserId,
            parentId: $this->parentId,
        );

        $stored = $commentService->store($dto);

        $this->message = trans('Comment created successfully.');
    }
}
