<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class EditPostComponent extends Component
{
    public function render(): View
    {
        return view('livewire.posts.edit-post-component');
    }
}
