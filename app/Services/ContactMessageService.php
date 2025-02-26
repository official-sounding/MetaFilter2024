<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\ContactMessageDto;
use App\Mail\ContactFormMessage;
use App\Repositories\ContactMessageRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;
use Illuminate\Support\Facades\Mail;

final class ContactMessageService
{
    use LoggingTrait;

    public function __construct(protected ContactMessageRepositoryInterface $contactMessageRepository) {}

    public function handle(ContactMessageDto $dto): bool
    {
        $sent = false;

        $stored = $this->store($dto);

        if ($stored) {
            $sent = $this->send($dto);
        }

        return $sent;
    }

    private function send(ContactMessageDto $dto): bool
    {
        try {
            Mail::send(new ContactFormMessage($dto));

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    private function store(ContactMessageDto $dto): bool
    {
        try {
            $data = [
                'name' => $dto->name,
                'email' => $dto->email,
                'subject' => $dto->subject,
                'message' => $dto->message,
                'copy_sender' => $dto->copySender,
            ];

            $this->contactMessageRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
