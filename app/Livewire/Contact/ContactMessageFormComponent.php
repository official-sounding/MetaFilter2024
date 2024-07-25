<?php

declare(strict_types=1);

namespace App\Livewire\Contact;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ContactMessageFormComponent extends Component
{
    public ContactMessageForm $form;

    public function render(): View
    {
        return view('livewire.contact.contact-form');
    }
}
