<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Livewire\Post\Forms\PostForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PostFormComponent extends Component
{
    public PostForm $form;

    public function render(): View
    {
        return view('livewire.forms.post-form');
    }

    public function save() {}
}
