<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\MeFiMailDto;
use App\Models\MeFiMail;

final class MeFiMailService
{
    private readonly PurifierService $purifierService;

    public function __construct(PurifierService $purifierService) {
        $this->purifierService = $purifierService;
    }

    public function store(MeFiMailDto $dto): MeFiMail
    {
        $mail = new MeFiMail();

        $mail->subject = $this->purifierService->clean($dto->subject);

        $mail->save();

        return $mail;
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
