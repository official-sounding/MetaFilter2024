<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\Post;
use App\Services\Markable\FlagPostService;
use Illuminate\Contracts\View\View;

final class FlagPostComponent extends BaseFlagComponent
{
    public Post $post;
    public bool $flagged = false;
    public string $reason = '';

    private FlagPostService $flagPostService;

    public function boot(FlagPostService $flagPostService): void
    {
        $this->flagPostService = $flagPostService;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->user = auth()->user();

        $this->flagged = $this->flagPostService->flagged($this->post, $this->user);
    }

    public function render(): View
    {
        $iconPath = $this->getIconPath();

        return view('livewire.post.flag-component', [
            'iconPath' => $iconPath,
        ]);
    }

    public function delete(): void
    {
        $this->flagPostService->delete($this->post, $this->user);
    }

    public function store(): void
    {
        $this->flagPostService->store($this->post, $this->user);
    }
}
