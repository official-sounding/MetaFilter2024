<?php

declare(strict_types=1);

namespace App\View\Components\Posts;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class PostRssButton extends Component
{
    public Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function render(): View
    {
        return view('components.posts.post-rss-button');
    }
}
