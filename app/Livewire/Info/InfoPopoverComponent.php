<?php

declare(strict_types=1);

namespace App\Livewire\Info;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class InfoPopoverComponent extends Component
{
    public string $popoverButtonText;
    public string $popoverId;
    public string $popoverContents;

    public function render(string $popoverButtonText, string $popoverContents): View
    {
        $this->popoverButtonText = $popoverButtonText;
        $this->popoverContents = $popoverContents;

        $this->popoverId = uniqid('popover-', true);

        return view('livewire.info.info-popover-component');
    }
}
