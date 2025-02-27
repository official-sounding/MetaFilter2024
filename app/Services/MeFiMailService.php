<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\MeFiMailDto;
use App\Models\MeFiMail;
use App\Repositories\MeFiMailRepository;
use App\Traits\LoggingTrait;
use Exception;

final class MeFiMailService
{
    use LoggingTrait;

    public function __construct(
        protected MeFiMailRepository $meFiMailRepository,
        protected PurifierService $purifierService
    ) {}

    public function store(MeFiMailDto $dto): bool
    {
        try {
            $mail = new MeFiMail([
                'subject' => $dto->subject,
                'message' => $dto->message,
                'sender_id' => $dto->sender_id,
                'recipient_id' => $dto->recipient_id,
            ]);

            $mail->save();

            return true;
        } catch (Exception $exception) {
            $this->logError($exception);

            return false;
        }
    }

    public function update(array $data): bool
    {
        $post = MeFiMail::find($data['id']);

        return $post->update($data);
    }

    public function delete(MeFiMail $mail): bool
    {
        return $mail->delete();
    }
}
