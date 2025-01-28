<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
{
    public Authenticatable $user;
    public ?Comment $storedComment = null;
    public string $text = '';
    public int $postId;
    public ?int $parentId = null;
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
        $this->text = $this->storedComment->text ?? '';
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
