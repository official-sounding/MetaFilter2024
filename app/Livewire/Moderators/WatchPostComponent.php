<?php

declare(strict_types=1);

namespace App\Livewire\Moderators;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class WatchPostComponent extends Component
{
    public Post $post;

    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    public function render(): View
    {
        return view('livewire.moderators.watch-post-component');
    }
}
