<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailRequest;
use App\Http\Requests\UpdateMailRequest;
use App\Models\MeFiMail;
use App\Services\MeFiMailService;
use Illuminate\Contracts\View\View;

final class MeFiMailController extends BaseController
{
    private const string TITLE_PREFIX = 'MeFi Mail';

    public function __construct(
        protected MeFiMailService $mefiMailService,
    ) {
        parent::__construct();
    }

    public function index(): View
    {
        return view('mail.index', [
            'title' => self::TITLE_PREFIX . 'Your Inbox',
        ]);
    }

    public function show(MeFiMail $mail): View
    {
        return view('mail.show', [
            'title' => self::TITLE_PREFIX . 'Message',
            'mail' => $mail,
        ]);
    }

    public function create(): View
    {
        return view('mail.create', [
            'title' => self::TITLE_PREFIX . 'Compose a Message',
        ]);
    }

    public function store(StoreMailRequest $request): void
    {
        // TODO: Encrypt before saving
    }

    public function edit(MeFiMail $mail): View
    {
        return view('mail.edit', [
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
