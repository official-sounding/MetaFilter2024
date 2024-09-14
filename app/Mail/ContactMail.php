<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

final class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    public function __construct() {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Email',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-text',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
