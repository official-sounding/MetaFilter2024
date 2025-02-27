<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class AddToActivityComponent extends Component
{
    public function render(): View
    {
        return view('livewire.posts.add-to-activity-component');
    }
}
