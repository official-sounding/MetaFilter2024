<?php

declare(strict_types=1);

namespace App\View\Components\Notifications;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class NotificationComponent extends Component
{
    public string $class = '';
    public string $iconFilename = '';

    public function __construct(string $iconFilename, string $class = 'is-info')
    {
        $this->class = $class;
        $this->iconFilename = $iconFilename;
    }

    public function render(): View
    {
        return view('components.notifications.notification-component');
    }
}
