<?php

declare(strict_types=1);

namespace App\View\Components\Common;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class DateFormatComponent extends Component
{
    public string $date;
    public string $format;

    public function __construct(string $date, string $format)
    {
        //
    }

    public function render(): View
    {
        return view('components.date-format-component');
    }
}
