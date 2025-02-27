<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dtos\MeFiMailDto;
use App\Http\Requests\Mail\StoreMeFiMailRequest;
use App\Http\Requests\Mail\UpdateMailRequest;
use App\Models\MeFiMail;
use App\Services\MeFiMailService;
use Illuminate\Contracts\View\View;

final class MeFiMailController extends BaseController
{
    private const string TITLE_PREFIX = 'MeFi Mail: ';

    public function __construct(
        protected MeFiMailService $mefiMailService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        return view('mefi-mail.index', [
            'title' => self::TITLE_PREFIX . trans('Your Inbox'),
        ]);
    }

    public function show(MeFiMail $mail): View
    {
        return view('mefi-mail.show', [
            'title' => self::TITLE_PREFIX . trans('Message'),
            'mail' => $mail,
        ]);
    }

    public function create(): View
    {
        return view('mefi-mail.create', [
            'title' => self::TITLE_PREFIX . trans('Compose a Message'),
        ]);
    }

    public function store(StoreMeFiMailRequest $request): void
    {
        $senderId = auth()->id();
        $recipientId = auth()->id(); // TODO: Change to correct user ID

        $dto = new MeFiMailDto(
            subject: $request->message,
            message: $request->subject,
            sender_id: $senderId,
            recipient_id: $recipientId,
        );

        $this->mefiMailService->store($dto);
    }

    public function edit(MeFiMail $mail): View
    {
        return view('mefi-mail.edit', [
            'title' => trans('Edit Email'),
            'mail' => $mail,
        ]);
    }

    public function update(UpdateMailRequest $request, MeFiMail $mail): void
    {
        // TODO: Encrypt before saving
    }

    public function delete(MeFiMail $mail): void
    {
        $mail->delete();
    }
}
