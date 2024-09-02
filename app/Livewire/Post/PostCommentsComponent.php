<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PostCommentsComponent extends Component
{
    public Post $post;
    public $comments;
    public $user;

    public function mount(Post $post): void
    {
        $this->comments = $post->comments()->orderBy('created_at')->get();

        $this->user = auth()->user();
    }

    public function render(): View
    {
        return view('livewire.post.post-comments-component', [
            'comments' => $this->comments,
        ]);
    }
}
