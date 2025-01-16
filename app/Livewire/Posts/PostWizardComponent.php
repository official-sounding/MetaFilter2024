<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Livewire\Posts\Steps\PostFormStepComponent;
use App\Livewire\Posts\Steps\PostPreviewStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

final class PostWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            PostFormStepComponent::class,
            PostPreviewStepComponent::class,
        ];
    }
}
