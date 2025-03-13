<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use Illuminate\Contracts\View\View;
use Livewire\Form;

final class AddCommentForm extends Form
{
    public function render(): View
    {
        return view('livewire.comments.forms.add-comment-form');
    }
}
