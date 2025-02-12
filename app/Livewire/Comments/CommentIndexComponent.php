<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use App\Models\Post;
use App\Repositories\CommentRepositoryInterface;
use App\Traits\AuthStatusTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

final class CommentIndexComponent extends Component
{
    use AuthStatusTrait;

    public ?int $authorizedUserId;
    public Post $post;
    public Collection $comments;
    protected CommentRepositoryInterface $commentRepository;

    public function mount(Post $post, CommentRepositoryInterface $commentRepository): void
    {
        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->commentRepository = $commentRepository;

        $this->post = $post;
        $this->getComments();
    }

    public function render(): View
    {
        $comments = $this->comments;

        return view('livewire.comments.comment-index-component', [
            'comments' => compact('comments'),
        ]);
    }

    public $listeners = [
        'commentCreated' => 'commentCreated',
        'commentDeleted' => 'commentDeleted',
    ];

    public function commentCreated(int $id): void
    {
        $comment = Comment::query()->find($id);

        if (is_null($comment->parent_id)) {
            $this->comments = $this->comments->prepend($comment);
        }
    }

    public function commentDeleted(int $id): void
    {
        $this->comments = $this->comments->reject(function ($comment) use ($id) {
            return $comment->id === $id;
        });
    }

    private function getComments(): void
    {
        $this->comments = $this->commentRepository->getCommentsByPostId($this->post->id);
    }
}
