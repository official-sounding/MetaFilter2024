<?php

declare(strict_types=1);

namespace App\Livewire\Posts\Steps;

use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

final class PostPreviewStepComponent extends StepComponent
{
    public function render(): View
    {
        return view('livewire.wizards.posts.posts-preview');
    }
}
