<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Traits\UuidTrait;
use Livewire\Component;

abstract class BaseWizardComponent extends Component
{
    use UuidTrait;

    public array $steps = [
        'Step One',
        'Step Two',
        'Step Three',
    ];

    public int $currentStep = 1;
    public int $totalSteps;
    public string $uuid;

    public function mount(): void
    {
        $this->totalSteps = count($this->steps);

        $this->uuid = $this->getUuid();
    }
}
