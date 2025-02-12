<?php

declare(strict_types=1);

namespace App\View\Components\Notifications;

use App\Traits\StringFormattingTrait;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class NoneListedComponent extends Component
{
    use StringFormattingTrait;

    public function __construct(
        public string $items,
    ) {}

    public function render(): View|Closure|string
    {
        $preparedText = $this->getPreparedText($this->items);

        return view('components.notifications.none-listed-component', [
            'text' => $preparedText,
        ]);
    }

    private function getPreparedText(string $items): string
    {
        $text = '0 ' . $items . ' are listed';

        return trans($text);
    }
}
