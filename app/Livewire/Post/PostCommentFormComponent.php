<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Livewire\Post\Forms\PostCommentForm;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PostCommentFormComponent extends Component
{
    public Post $post;
    public PostCommentForm $form;

    public function render(): View
    {
        return view('livewire.post.post-comment-form');
    }

    public function save() {}
}
