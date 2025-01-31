<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Enums\ReactionEnum;
use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentReactionsComponent extends Component
{
    public Comment $comment;
    public $reactions;
    public array $types;
    public function mount(Comment $comment): void
    {
        $this->comment = $comment;

        $this->types = ReactionEnum::getAllValues();

        $this->loadReactions();
    }

    public function render(): View
    {
        return view('livewire.comments.comment-reactions-component');
    }

    public function loadReactions(): void
    {
        $this->reactions = $this->comment->viaLoveReactant()->getReactions();
    }

    public function toggleReaction(string $reactionType): void
    {
        $user = auth()->user();

        $reactant = $this->comment->viaLoveReactant();
        $reactor = $user->viaLoveReactor();

        if ($reactor->hasReactedTo($reactant, $reactionType)) {
            $reactor->unreactTo($reactant, $reactionType);
        } else {
            $reactor->reactTo($reactant, $reactionType);
        }

        $this->loadReactions();
    }
}
