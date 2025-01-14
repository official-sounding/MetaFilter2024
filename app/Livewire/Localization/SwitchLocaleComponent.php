<?php

declare(strict_types=1);

namespace App\Livewire\Localization;

use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class SwitchLocaleComponent extends Component
{
    use LoggingTrait;

    public array $availableLocales;
    public string $currentLocale;

    public function mount(): void
    {
        $this->availableLocales = config('app.available_locales');
        $this->currentLocale = app()->getLocale();
    }

    public function render(): View
    {
        return view('livewire.localization.switch-locale-component');
    }

    public function switchLocale(string $locale): void
    {
        if (in_array($locale, $this->availableLocales)) {
            app()->setLocale($locale);
        } else {
            $this->logError('Invalid locale selected: ' . $locale);
        }
    }
}
