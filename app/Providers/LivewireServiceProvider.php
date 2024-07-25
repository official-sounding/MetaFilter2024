<?php

declare(strict_types=1);

namespace App\Providers;

use App\Livewire\Register\RegisterWizardComponent;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

final class LivewireServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Livewire::component('register-wizard', RegisterWizardComponent::class);
    }
}
