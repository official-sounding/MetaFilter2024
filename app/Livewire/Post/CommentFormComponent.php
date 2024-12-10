<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Enums\LivewireEventEnum;
use App\Enums\StatusEnum;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Post;
use App\Models\User;
use App\Services\CommentService;
use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
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
            $this->logInfo(StatusEnum::CommentAdded->value);

            session()->flash('message', StatusEnum::CommentAdded->value);
        } else {
            $this->logError(StatusEnum::AddingCommentFailed->value);

            session()->flash('error', StatusEnum::AddingCommentFailed->value);
        }

        $this->reset('contents');

        $this->dispatch(LivewireEventEnum::CommentAdded->value);
    }

    public function render(): View
    {
        return view('livewire.post.comment-form-component');
    }
}
