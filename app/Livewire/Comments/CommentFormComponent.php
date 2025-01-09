<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
{
    public User $user;
    public ?Comment $storedComment = null;
    public string $body = '';
    public int $postId;
    public ?int $parentId = null;
    public ?string $buttonText = null;
    public string $cancelAction;
    public ?string $message = null;

    public function mount(
        int $postId,
        ?int $parentId = null,
        $storedComment = null,
    ): void {
        $this->user = auth()->user();
        $this->postId = $postId;
        $this->parentId = $parentId;
        $this->storedComment = $storedComment;
        $this->body = $this->storedComment->body ?? '';
    }

    public function render(): View
    {
        return view('livewire.comments.comment-form-component');
    }

    protected function rules(): array
    {
        return (new StoreCommentRequest())->rules();
    }
}
