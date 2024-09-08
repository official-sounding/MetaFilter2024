<?php

declare(strict_types=1);

namespace App\Livewire\Contact;

use App\Http\Requests\Contact\SendContactMessageRequest;
use Livewire\Form;

final class ContactMessageForm extends Form
{
    protected function rules(): array
    {
        return (new SendContactMessageRequest())->rules();
    }
}
