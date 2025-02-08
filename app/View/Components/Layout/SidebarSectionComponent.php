<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class SidebarSectionComponent extends Component
{
    public string $class;
    public bool $open;
    public string $heading;

    public function __construct(string $heading, string $class = '', bool $open = false)
    {
        $this->class = $class;
        $this->open = $open;
        $this->heading = $heading;
    }

    public function render(): View
    {
        return view('components.layout.sidebar-section-component');
    }
}
