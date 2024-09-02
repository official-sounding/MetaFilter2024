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

    private FlagPostService $flagPostService;

    public function boot(FlagPostService $flagPostService): void
    {
        $this->flagPostService = $flagPostService;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->user = auth()->user();

        $this->flagged = $this->flagPostService->flagged($this->comment, $this->user);
    }

    public function render(): View
    {
        return view('livewire.flag-post-component');
    }
}
