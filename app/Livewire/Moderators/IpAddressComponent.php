<?php

declare(strict_types=1);

namespace App\Livewire\Moderators;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class IpAddressComponent extends Component
{
    public string $ipAddress = '';

    public function mount(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    public function render(): View
    {
        return view('livewire.moderators.ip-address-component');
    }
}
