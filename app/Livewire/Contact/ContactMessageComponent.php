<?php

declare(strict_types=1);

namespace App\Livewire\Contact;

use App\Http\Requests\Contact\SendContactMessageRequest;
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
    public bool $stored = false;

    protected function rules(): array
    {
        return (new SendContactMessageRequest())->rules();
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
            'message' => $this->message,
        ];

        $stored = $emailService->store($data);

        $this->reset();

        if ($stored) {
            $this->status = 'Message stored successfully.';
        } else {
            $this->status = 'Failed to send message.';
        }
    }
}
