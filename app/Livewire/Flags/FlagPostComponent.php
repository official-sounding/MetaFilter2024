<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Livewire\Flags\BaseFlagComponent;
use App\Models\Post;
use App\Services\FlagPostService;
use App\Traits\FlagTrait;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;

final class FlagPostComponent extends BaseFlagComponent
{
    use FlagTrait;

    public string $title;
    public Post $post;
    private FlagPostService $flagPostService;
    public string $flagEvent;

    public function boot(FlagPostService $flagPostService): void
    {
        $this->flagPostService = $flagPostService;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->title = 'Flags this post';
        $this->user = auth()->user();
        $this->type = 'post';

        $this->flagged = $this->user !== null
            ? $this->flagPostService->flagged($this->post->id, $this->user->id)
            : false;

        $this->iconPath = $this->getIconPath();
    }

    public function render(): View
    {
        return view('livewire.flags.flag-component')->with([
            'iconPath' => $this->iconPath,
            'title' => $this->title,
            'type' => $this->type,
        ]);
    }

    #[On('post-flag-added.{post.id}')]
    public function flagPost(): void
    {
        $this->incrementFlags();
        $this->flagged = true;
    }
}
