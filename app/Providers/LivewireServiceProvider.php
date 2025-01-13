<?php

declare(strict_types=1);

namespace App\Providers;

use App\Livewire\Signup\SignupWizardComponent;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

final class LivewireServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Livewire::component('signup-wizard', SignupWizardComponent::class);
    }
}
