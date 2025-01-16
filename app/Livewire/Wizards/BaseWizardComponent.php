<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Models\Subsite;
use App\Traits\LoggingTrait;
use App\Traits\SubsiteTrait;
use Livewire\Component;

abstract class BaseWizardComponent extends Component
{
    use LoggingTrait;
    use SubsiteTrait;

    public int $currentStep = 1;
    public Subsite $subsite;

    public function goToStep($step): void
    {
        $this->currentStep = $step;
    }

    abstract public function resetForm(): void;
    abstract public function store(): void;
}
