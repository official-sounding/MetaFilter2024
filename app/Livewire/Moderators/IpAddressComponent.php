<?php

declare(strict_types=1);

namespace App\Livewire\Moderators;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class IpAddressComponent extends Component
{
    public function render(): View
    {
        return view('livewire.ip-address-component');
    }
}
