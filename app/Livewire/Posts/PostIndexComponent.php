<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

final class PostIndexComponent extends Component
{
    use WithPagination;

    public Collection $posts;

    private PostRepositoryInterface $postRepository;

    public function boot(PostRepositoryInterface $postRepository): void
    {
        $this->postRepository = $postRepository;
    }

    public function mount(): void
    {
        $this->posts = new Collection();

        $this->getPosts();
    }

    public function getPosts(): void
    {
        $this->posts = $this->postRepository->getPosts();
    }

    public function render(): View
    {
        return view('livewire.posts.post-index-component')->with([
            'posts' => $this->posts,
        ]);
    }
}
