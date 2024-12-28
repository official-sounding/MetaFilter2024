<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class SidebarSectionComponent extends Component
{
    public string $class;
    public bool $open;
    public string $heading;

    public function __construct($heading, $class = '', $open = false)
    {
        $this->class = $class;
        $this->open = boolval($open);
        $this->heading = $heading;
    }

    public function render(): View
    {
        return view('components.sidebar-section-component');
    }
}
