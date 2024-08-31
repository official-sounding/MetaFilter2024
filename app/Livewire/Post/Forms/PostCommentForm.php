<?php

declare(strict_types=1);

namespace App\Livewire\Post\Forms;

use App\Models\Comment;
use App\Models\Post;
use App\Traits\LoggingTrait;
use Exception;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class PostCommentForm extends Form
{
    use LoggingTrait;

    public int $userId;
    public Post $post;

    public function boot(): void
    {
        $this->userId = auth()->id();
    }

    #[Validate('required|string|min:5')]
    public string $contents = '';

    public function store(): bool
    {
        $this->validate();

        try {
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
}
