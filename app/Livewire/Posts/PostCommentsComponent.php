<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Enums\LivewireEventEnum;
use App\Models\Post;
use App\Repositories\CommentRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

final class PostCommentsComponent extends Component
{
    public array $flagReasons;
    public Post $post;
    public Collection $comments;
    public bool $showFlagCommentForm = false;

    private CommentRepositoryInterface $commentRepository;

    public function boot(CommentRepositoryInterface $commentRepository): void
    {
        $this->commentRepository = $commentRepository;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    public function render(): View
    {
        $this->getComments();

        return view('livewire.posts.post-comments-component')->with([
            'comments' => $this->comments,
        ]);
    }

    #[On(LivewireEventEnum::CommentStored)]
    public function getComments(): void
    {
        $this->comments = $this->commentRepository->getCommentsByPostId($this->post->id);
    }

    #[On(LivewireEventEnum::HideFlagCommentForm)]
    public function hideFlagCommentForm(): void
    {
        $this->showFlagCommentForm = false;
    }

    #[On(LivewireEventEnum::ToggleFlagCommentForm)]
    public function toggleFlagCommentForm(): void
    {
        $this->showFlagCommentForm = ! $this->showFlagCommentForm;
    }
}
