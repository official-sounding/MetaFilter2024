<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Dtos\CommentDto;
use App\Enums\LivewireEventEnum;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
{
    public int $authorizedUserId;
    public string $buttonText = '';
    public ?Comment $comment;
    public bool $isEditing;
    public bool $isReplying;
    public string $text = '';
    public int $postId;
    public ?int $parentId = null;
    public ?string $message = null;

    public function mount(
        int $authorizedUserId,
        int $postId,
        ?Comment $comment,
        ?int $parentId = null,
    ): void {
        $this->authorizedUserId = $authorizedUserId;

        $this->isEditing = false;
        $this->isReplying = false;

        $this->postId = $postId;
        $this->parentId = $parentId;

        $this->comment = $comment ?? null;
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

    public function handle(CommentService $commentService): void
    {
        $this->validate();

        if ($this->isEditing === true) {
            $this->update($commentService);
        } else {
            $this->store($commentService);
        }
    }

    public function store(CommentService $commentService): void
    {
        $dto = new CommentDto(
            text: $this->text,
            post_id: $this->postId,
            user_id: $this->authorizedUserId,
            parent_id: $this->parentId,
        );

        $stored = $commentService->store($dto);

        if ($stored) {
            $this->dispatch(LivewireEventEnum::CommentStored->value);

            $this->message = trans('Comment created.');
        }

        $this->reset('text');
    }

    public function update(CommentService $commentService): void
    {
        $data = [
            'text' => $this->text,
        ];

        $updated = $commentService->update($this->comment->id, $data);

        if ($updated) {
            $this->dispatch(LivewireEventEnum::CommentUpdated->value);

            $this->message = trans('Comment updated.');
        }
    }
}
