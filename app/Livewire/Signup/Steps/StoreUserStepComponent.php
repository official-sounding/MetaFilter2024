<?php

declare(strict_types=1);

namespace App\Livewire\Signup\Steps;

use App\Services\UserService;
use Spatie\LivewireWizard\Components\StepComponent;

final class StoreUserStepComponent extends StepComponent
{
    protected UserService $userService;

    public function mount(UserService $userService): void
    {
        $this->userService = $userService;

        $this->create();

        $this->nextStep();
    }

    public function create(): void
    {
        $data = $this->state()->newUserData();

        $this->userService->store($data);
    }
}
