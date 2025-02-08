<?php

declare(strict_types=1);

namespace App\Livewire\Modals;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ModalComponent extends Component
{
    public $show = false;
    public $isOpen = false;

    protected $listeners = [
        'show' => 'show',
    ];

    public function openModal(): void
    {
        $this->isOpen = true;
    }

    public function closeModal(): void
    {
        $this->isOpen = false;
    }

    public function show(): void
    {
        $this->show = true;
    }

    public function render(): View
    {
        return view('livewire.modals.modal-component');
    }
}
