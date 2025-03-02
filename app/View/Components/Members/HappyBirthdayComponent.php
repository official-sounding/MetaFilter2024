<?php

declare(strict_types=1);

namespace App\View\Components\Members;

use DateTimeImmutable;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class HappyBirthdayComponent extends Component
{
    public bool $isYourBirthday = false;
    public DateTimeImmutable $currentDate;

    public function __construct()
    {
        $this->currentDate = new DateTimeImmutable();
        ;

        $this->determineBirthday();
    }

    public function render(): View
    {
        return view('components.members.happy-birthday-component');
    }

    private function determineBirthday(): void
    {
        // TODO: Compare with member's birthday
        $this->isYourBirthday = false;
    }
}
