<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Dtos\CommentDto;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Models\Comment;
use App\Services\CommentService;
use App\Traits\CommentTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

final class CommentComponent extends Component
{
    use CommentTrait;

    // Data
    public string $text = '';
    public ?int $parentId = null;
    public int $postId;
    public int $wordCount = 0;

    // State
    public bool $isEditing = false;
    public bool $isFlagging = false;
    public bool $isReplying = false;

    public Comment $comment;
    public CommentForm $commentForm;

    public function mount(Comment $comment, int $postId): void
    {
        $this->comment = $comment;
        $this->commentForm->setComment($comment);

        $this->postId = $postId;

        $this->text = $comment->text;

        $this->wordCount = str_word_count($comment->text);
    }

    public function render(): View
    {
        return view('livewire.comments.comment-component');
    }

    public function store(CommentService $commentService): void
    {
        $rules = (new StoreCommentRequest())->rules();

        try {
            $this->commentForm->validate($rules);

            $dto = new CommentDto(
                text: $this->text,
                post_id: $this->postId,
                user_id: auth()->id(),
                parent_id: $this->parentId,
            );

            $stored = $commentService->store($dto);
        } catch (ValidationException $exception) {
            Log::error($exception->getMessage());
        }
    }

    public function update(CommentService $commentService): void
    {
        $rules = (new UpdateCommentRequest())->rules();

        try {
            $this->commentForm->validate($rules);
        } catch (ValidationException $exception) {
            Log::error($exception->getMessage());
        }

        $data = [
            'text' => $this->text,
        ];

        $updated = $commentService->update($this->comment->id, $data);
    }
}
