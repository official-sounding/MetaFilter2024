<?php

declare(strict_types=1);

namespace App\Livewire\Contact;

use App\Http\Requests\Contact\StoreContactMessageRequest;
use App\Services\EmailService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ContactMessageComponent extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';
    public string $status = '';
    public bool $copy_sender = false;
    public bool $stored = false;

    protected function rules(): array
    {
        return new StoreContactMessageRequest()->rules();
    }

    public function render(): View
    {
        return view('livewire.contact.contact-form');
    }

    public function store(EmailService $emailService): void
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'copy_sender' => $this->copy_sender,
            'message' => $this->message,
        ];

        $stored = $emailService->store($data);

        $this->reset();

        if ($stored) {
            $this->status = trans('Message stored successfully.');
        } else {
            $this->status = trans('Failed to send message.');
        }
    }
}
