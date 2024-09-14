<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

final class PostCommentsComponent extends Component
{
    public Post $post;
    public $comments;
    public bool $showFlagForm = true;

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->getComments();
    }

    public function render(): View
    {
        return view('livewire.post.post-comments-component', [
            'comments' => $this->comments,
        ]);
    }

    #[On('comment-added')]
    public function getComments(): void
    {
        $this->comments = $this->post->comments()->orderBy('created_at')->get();
    }
}
