<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use App\Repositories\CommentRepository;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
{
    public Authenticatable $user;

    public string $buttonText = '';

    public ?Comment $storedComment = null;

    public bool $isEditing = false;

    public bool $isReplying = false;

    public string $text = '';

    public int $postId;

    public ?int $parentId = null;

    public ?string $message = null;

    protected CommentRepository $commentRepository;

    public function mount(
        int $postId,
        ?int $parentId,
        $storedComment,
        CommentRepository $commentRepository,
    ): void {
        $this->user = auth()->user();
        $this->postId = $postId;
        $this->parentId = $parentId;
        $this->storedComment = $storedComment;
        $this->text = $this->storedComment->text ?? '';
        $this->commentRepository = $commentRepository;
    }

    public function render(): View
    {
        return view('livewire.comments.comment-form-component');
    }

    protected function rules(): array
    {
        return (new StoreCommentRequest)->rules();
    }

    public function store(): void
    {
        $this->validate();

        $this->storedComment = (new Comment)->create([
            'user_id' => $this->user->id,
            'post_id' => $this->postId,
            'parent_id' => $this->parentId,
            'text' => $this->text,
        ]);

        $this->message = trans('Comment created successfully.');
    }
}
