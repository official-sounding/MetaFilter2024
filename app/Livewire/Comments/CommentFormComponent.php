<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CommentFormComponent extends Component
{
    public function render(): View
    {
        return view('livewire.comment-form-component');
    }
}
