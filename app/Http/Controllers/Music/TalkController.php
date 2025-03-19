<?php

declare(strict_types=1);

namespace App\Http\Controllers\Music;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

final class TalkController extends BaseController
{
    public function index(): View
    {
        return view('music.talk.index', [
            'title' => trans('Talk'),
            'showSecondaryNavigation' => true,
        ]);
    }
}
