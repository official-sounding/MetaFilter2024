<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use App\Traits\AuthStatusTrait;
use Livewire\Form;

final class CommentForm extends Form
{
    use AuthStatusTrait;

    public int $authorizedUserId;
    public string $text = '';
    public int $postId = 0;
    public ?int $parentId = null;

    public function mount(): void
    {
        $this->authorizedUserId = $this->getAuthorizedUserId();
    }

    public function setComment(Comment $comment): void
    {
        $this->text = $comment->text;
        $this->postId = $comment->post_id;
        $this->parentId = $comment->parent_id;
    }

    protected function rules(): array
    {
        return (new StoreCommentRequest())->rules();
    }

    public function update(): void
    {
        /*
        if ($this->authorizedUserId !== $this->comment->user_id) {
            return;
        }
        */

        $this->validate();

        $this->comment->update([
            'text' => $this->text,
        ]);

        $this->isEditing = false;

        session()->flash('message', trans('Comment updated successfully.'));
    }
}
