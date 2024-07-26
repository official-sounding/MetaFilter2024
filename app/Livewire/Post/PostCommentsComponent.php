<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

final class PostCommentsComponent extends Component
{
    public Post $post;
    public $comments;
    public $user;

    public function mount(Post $post): void
    {
        $this->comments = $post->comments()->orderBy('created_at')->get();

        $this->user = Auth::user();
    }

    public function render(): View
    {
        return view('livewire.post.post-comments-component', [
            'comments' => $this->comments,
        ]);
    }
}
