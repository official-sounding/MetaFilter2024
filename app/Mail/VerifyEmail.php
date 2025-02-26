<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\User;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

final class VerifyEmail extends BaseMailable
{
    public function __construct(
        public User $user,
    ) {}


    public function envelope(): Envelope
    {
        return new Envelope(
            to: new Address(
                address: $this->user->email,
                name: $this->user->username,
            ),
            subject: trans('Please Verify Your Email Address'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.verify-email',
            with: [
                'user' => $this->user,
            ],
        );
    }
}
