<?php

declare(strict_types=1);

namespace App\Livewire\Admin;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ClosePostComponent extends Component
{
    public Post $post;

    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    public function render(): View
    {
        return view('livewire.admin.close-post-component');
    }

    public function closePost(PostService $postService): void
    {
        $postService->closePost($this->post);
    }
}
