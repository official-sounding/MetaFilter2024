<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Http\Requests\Flag\StoreFlagNoteRequest;
use App\Models\BaseModel;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class FlagNoteComponent extends Component
{
    public BaseModel $model;
    public string $reason;

    public function mount(BaseModel $model): void
    {
        $this->model = $model;
    }

    public function render(): View
    {
        return view('livewire.flags.flag-note-component');
    }

    public function updateReason(): void
    {
        $rules = (new StoreFlagNoteRequest())->rules();

        $this->validate();

        $comment->reason = $this->reason;
        $comment->save();

        // Dispatch event to notify other components
        $this->dispatch('commentUpdated', $comment->id);

        session()->flash('message', 'Reason updated successfully.');
    }
}
