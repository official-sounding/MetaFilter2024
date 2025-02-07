<?php

declare(strict_types=1);

namespace App\Livewire\Moderators;

use App\Models\BaseModel;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class AddNoteComponent extends Component
{
    public BaseModel $model;
    public int $authorizedUserId;

    public function mount(BaseModel $model): void
    {
        $this->model = $model;
    }

    public function render(): View
    {
        return view('livewire.moderators.add-note-component');
    }
}
