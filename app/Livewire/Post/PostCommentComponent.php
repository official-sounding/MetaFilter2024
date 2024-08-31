<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Enums\StatusEnum;
use App\Models\Comment;
use App\Traits\LoggingTrait;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

final class PostCommentComponent extends Component
{
    use LoggingTrait;

    #[Validate('required|string|min:5')]
    public string $contents = '';

    public function store(): bool
    {
        $this->validate();

        try {
            $this->logDebugMessage('contents: ' . $this->contents);
            $this->logDebugMessage('Post ID: ' . $this->post->id);
            $this->logDebugMessage('User ID: ' . $this->userId);

            Comment::create([
                'contents' => $this->contents,
                'post_id' => $this->post->id,
                'user_id' => $this->userId,
            ]);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function save(): void
    {
        $stored = $this->store();

        if ($stored) {
            $this->logInfo(StatusEnum::COMMENT_ADDED->value);

            session()->flash('status', 'Comment added.');
        } else {
            $this->logError(StatusEnum::ADDING_COMMENT_FAILED->value);

            session()->flash('status', 'Unable to add comment.');
        }

        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.post.post-comment-form');
    }
}
