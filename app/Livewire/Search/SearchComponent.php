<?php

declare(strict_types=1);

namespace App\Livewire\Search;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class SearchComponent extends Component
{
    public function render(): View
    {
        return view('livewire.search.search-component');
    }
}
