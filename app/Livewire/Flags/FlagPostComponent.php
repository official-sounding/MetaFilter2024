<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Models\Post;
use Livewire\Attributes\On;

final class FlagPostComponent extends BaseFlagComponent
{
    private const string FLAGGABLE_TYPE = 'post';

    public Post $post;
    public function mount(Post $post): void
    {
        $this->post = $post;

        $this->title = trans('Flag this post');

        $this->userFlagged = $this->hasUserFlagged(
            flaggableType: self::FLAGGABLE_TYPE,
            flaggableId: $this->post->id
        );

        $this->iconPath = $this->getIconPath($this->userFlagged);
    }

    #[On('post-flag-added.{post.id}')]
    public function storePostFlag(): void
    {
        $this->flagService->store([
            'flaggable_type' => self::FLAGGABLE_TYPE,
            'flaggable_id' => $this->post->id,
            'user_id' => $this->authorizedUserId,
            'note' => $this->note,
        ]);
    }

    #[On('post-flag-deleted.{post.id}')]
    public function deletePostFlag(): void
    {
        $deleted = $this->flagService->delete(
            flaggableType: self::FLAGGABLE_TYPE,
            flaggableId: $this->post->id,
            userId: $this->authorizedUserId
        );

        if ($deleted === true) {
            $this->decrementFlagCount();

            $this->userFlagged = false;
        }
    }
}
