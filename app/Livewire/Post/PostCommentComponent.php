<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Enums\StatusEnum;
use App\Http\Requests\Post\StoreCommentRequest;
use App\Models\Post;
use App\Models\User;
use App\Services\CommentService;
use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PostCommentComponent extends Component
{
    use LoggingTrait;

    public Post $post;
    public User $user;

    public string $contents = '';

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->user = auth()->user();
    }

    protected function rules(): array
    {
        return (new StoreCommentRequest())->rules();
    }

    public function store(CommentService $commentService): void
    {
        $this->validate();

        $data = [
            'contents' => $this->contents,
            'post_id' => $this->post->id,
            'user_id' => $this->user->id,
        ];

        $stored = $commentService->store($data);

        if ($stored) {
            $this->logInfo(StatusEnum::COMMENT_ADDED->value);

            session()->flash('message', StatusEnum::COMMENT_ADDED->value);
        } else {
            $this->logError(StatusEnum::ADDING_COMMENT_FAILED->value);

            session()->flash('error', StatusEnum::ADDING_COMMENT_FAILED->value);
        }

        $this->reset('contents');

        $this->dispatch('comment-added');
    }

    public function render(): View
    {
        return view('livewire.post.post-comment-form');
    }
}
