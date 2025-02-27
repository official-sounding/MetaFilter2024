<?php

declare(strict_types=1);

namespace App\Mail;

use App\Dtos\ContactMessageDto;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

final class ContactFormMessage extends BaseMailable
{
    public function __construct(public ContactMessageDto $dto) {}

    public function envelope(): Envelope
    {
        $senderName = $this->dto->name;
        $senderEmail = $this->dto->email;

        $envelope = new Envelope(
            from: new Address(
                address: $senderEmail,
                name: $senderName,
            ),
            subject: $this->dto->subject,
        );

        if ($this->dto->copySender === true) {
            $envelope->cc(
                address: $senderEmail,
                name: $senderName,
            );
        }

        return $envelope;
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
            with: [
                'dto' => $this->dto,
            ],
        );
    }
}
