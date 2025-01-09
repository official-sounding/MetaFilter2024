<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

final class CommentIndexComponent extends Component
{
    public Post $post;
    public Collection $comments;

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->comments = $this->getComments();
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
        $this->comments = $this->comments->reject(function ($comment, int $key) use ($id) {
            return $comment->id === $id;
        });
    }

    private function getComments(): Collection
    {
        return Comment::query()
            ->with([
                'user',
                'replies',
            ])
            ->where('post_id', '=', $this->post->id)
            ->whereNull('parent_id')
            ->orderByDesc('created_at')
            ->get();
    }
}
