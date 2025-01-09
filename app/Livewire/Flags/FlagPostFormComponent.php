<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Enums\LivewireEventEnum;
use App\Livewire\Flags\BaseFlagFormComponent;
use App\Models\Post;
use App\Services\FlagPostService;

final class FlagPostFormComponent extends BaseFlagFormComponent
{
    private const string FLAGGABLE_TYPE = 'App\Models\Post';

    public Post $post;

    private FlagPostService $flagPostService;

    public function boot(FlagPostService $flagPostService): void
    {
        $this->flagPostService = $flagPostService;
    }

    public function mount(Post $post): void
    {
        $this->post = $post;

        $this->flagFormId = 'flag-post-form-' . $this->post->id;

        $this->type = 'post';
    }

    public function store(): void
    {
        $validated = $this->validate();

        $postId = $this->post->id;

        $data = [
            'user_id' => $this->user->id,
            'flag_reason_id' => $validated['flag_reason_id'],
            'note' => $validated['note'],
            'flaggable_type' => self::FLAGGABLE_TYPE,
            'flaggable_id' => $postId,
        ];

        $stored = $this->flagPostService->create($data);

        if ($stored) {
            $this->dispatch(LivewireEventEnum::PostFlagAdded->value, id: $postId);
        } else {
            $this->logError('Failed to store post flag');
        }
    }
}
