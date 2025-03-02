<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Dtos\ContactMessageDto;
use App\Mail\ContactFormMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

final class SendContactFormEmail implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    protected ContactMessageDto $dto;

    public function __construct(ContactMessageDto $dto)
    {
        $this->dto = $dto;
    }

    public function handle(): void
    {
        Mail::send(new ContactFormMessage($this->dto));
    }
}
