<?php

declare(strict_types=1);

namespace App\Livewire\Contact;

use App\Dtos\ContactMessageDto;
use App\Http\Requests\Contact\StoreContactMessageRequest;
use App\Services\ContactMessageService;
use App\Services\EmailService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ContactMessageComponent extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public string $subject = '';
    public string $status = '';
    public bool $copy_sender = false;
    public bool $required = false;
    public bool $stored = false;

    protected function rules(): array
    {
        return (new StoreContactMessageRequest())->rules();
    }

    public function render(): View
    {
        return view('livewire.contact.contact-form');
    }

    public function store(ContactMessageService $contactMessageService): void
    {
        $this->validate();

        $dto = new ContactMessageDto(
            name: $this->name,
            email: $this->email,
            subject: $this->subject,
            message: $this->message,
            copySender: $this->copy_sender,
        );

        $stored = $contactMessageService->handle($dto);

        $this->reset();

        if ($stored) {
            $this->status = trans('Message sent successfully.');
        } else {
            $this->status = trans('Failed to send message.');
        }
    }
}
