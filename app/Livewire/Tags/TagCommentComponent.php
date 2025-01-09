<?php

declare(strict_types=1);

namespace App\Livewire\Tags;

use Illuminate\Contracts\View\View;

final class TagCommentComponent extends BaseTagComponent
{
    public function render(): View
    {
        return view('livewire.tags.tag-comment-component');
    }
}
