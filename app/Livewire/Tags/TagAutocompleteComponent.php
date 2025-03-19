<?php

declare(strict_types=1);

namespace App\Livewire\Tags;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Spatie\Tags\Tag;

final class TagAutocompleteComponent extends Component
{
    public string $searchTag = '';
    public array $searchResults = [];

    public function render(): View
    {
        return view('livewire.tags.tag-autocomplete-component');
    }

    public function updatedSearchTag(): void
    {
        if (!empty($this->searchTag)) {
            $this->searchResults =
                Tag::where('name', 'LIKE', '%' . $this->searchTag . '%')
                    ->limit(5)
                    ->get()
                    ->toArray();
        } else {
            $this->searchResults = [];
        }
    }

    // https://fly.io/laravel-bytes/livewire-autocomplete/
}
