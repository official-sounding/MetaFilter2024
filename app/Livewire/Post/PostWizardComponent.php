<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Livewire\Post\Steps\PostFormStepComponent;
use App\Livewire\Post\Steps\PostPreviewStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

final class ehPostWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            PostFormStepComponent::class,
            PostPreviewStepComponent::class,
        ];
    }
}
