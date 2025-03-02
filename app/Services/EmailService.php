<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ContactMessageRepositoryInterface;
use App\Traits\LoggingTrait;
use Exception;
use Illuminate\Support\Facades\Mail;

final class EmailService
{
    use LoggingTrait;

    public function __construct(protected ContactMessageRepositoryInterface $contactMessageRepository) {}

    public function send(string $to, string $subject, string $message): bool
    {
        try {
            Mail::raw($message, function ($mail) use ($to, $subject) {
                $mail->to($to)->subject($subject);
            });

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function store(array $data): bool
    {
        try {
            $this->contactMessageRepository->create($data);

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }
}
