<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Models\User;
use App\Services\FlagService;
use App\Traits\AuthStatusTrait;
use App\Traits\FlagTrait;
use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class BaseFlagComponent extends Component
{
    use AuthStatusTrait;
    use FlagTrait;
    use LoggingTrait;

    public int $authorizedUserId;
    public bool $userFlagged;
    public int $flagCount;
    public string $iconPath;
    public string $note;
    public bool $showForm = false;
    public string $title;
    public string $type;
    public ?User $user;

    public function __construct(
        protected FlagService $flagService,
    ) {
        $this->authorizedUserId = $this->getAuthorizedUserId();
    }

    public function render(): View
    {
        return view('livewire.flags.flag-component')->with([
            'iconPath' => $this->iconPath,
            'title' => $this->title,
            'type' => $this->type,
        ]);
    }

    public function delete(string $flaggableType, int $flaggableId): void
    {
        $deleted = $this->flagService->delete(
            flaggableType: $flaggableType,
            flaggableId: $flaggableId,
            userId: $this->authorizedUserId
        );

        if ($deleted === true) {
            $this->decrementFlagCount();

            $this->userFlagged = false;
        }
    }

    public function store(string $flaggableType, int $flaggableId, string $note): void
    {
        $data = [
            'flaggable_type' => $flaggableType,
            'flaggable_id' => $flaggableId,
            'user_id' => $this->authorizedUserId,
            'note' => $note,
        ];

        $stored = $this->flagService->store($data);

        if ($stored === true) {
            $this->incrementFlagCount();

            $this->userFlagged = true;
        }
    }

    public function hasUserFlagged(string $flaggableType, int $flaggableId): bool
    {
        return $this->flagService->userFlagged(
            flaggableType: $flaggableType,
            flaggableId: $flaggableId,
            userId: $this->authorizedUserId
        );
    }
}
