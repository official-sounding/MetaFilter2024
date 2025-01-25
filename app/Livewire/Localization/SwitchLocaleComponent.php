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

        $this->getCurrentLocale();
    }

    public function render(): View
    {
        return view('livewire.localization.switch-locale-component');
    }

    public function switchLocale(string $locale): void
    {
        if (in_array($locale, $this->availableLocales)) {
            session()->put('locale', $locale);

            app()->setLocale($locale);
        } else {
            $this->logError('Invalid locale selected: ' . $locale);
        }
    }

    private function getCurrentLocale(): void
    {
        $this->currentLocale = app()->getLocale();
    }
}
