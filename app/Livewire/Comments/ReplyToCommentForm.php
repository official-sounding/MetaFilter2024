<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class ReplyToCommentForm extends Form
{
    #[Validate('required|min:5')]
    public string $text = '';

    public function render(): View
    {
        return view('livewire.comments.forms.reply-to-comment-form');
    }
}
