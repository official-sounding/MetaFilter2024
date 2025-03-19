<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Enums\LivewireEventEnum;
use App\Http\Requests\StoreFlagRequest;
use App\Models\Comment;
use App\Models\Flag;
use App\Models\Post;
use App\Traits\AuthStatusTrait;
use App\Traits\LoggingTrait;
use App\Traits\TypeTrait;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Maize\Markable\Exceptions\InvalidMarkValueException;

final class FlagComponent extends Component
{
    use AuthStatusTrait;
    use LoggingTrait;
    use TypeTrait;

    private const string FLAG_WITH_NOTE = 'Flag with note';
    private const string MODEL_PATH = 'app\\models\\';

    public Comment|Post $model;
    public int $authorizedUserId;
    public int $flagCount = 0;
    public string $iconFilename = 'flag';
    public string $note = '';
    public array $flagReasons = [];
    public ?array $metadata = null;
    public string $selectedReason = '';
    public bool $showForm = false;
    public bool $showNoteField = false;
    public string $titleText;
    public bool $userFlagged = false;

    public function mount(
        Comment|Post $model,
    ): void {
        $configReasons = config('markable.allowed_values.flag', []);
        $this->flagReasons = is_array($configReasons) ? $configReasons : [];

        $this->model = $model;
        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->updateFlagData();
    }

    public function render(): View
    {
        return view('livewire.flags.flag-component');
    }

    public function flagReasonSelected(string $selectedReason): void
    {
        if ($selectedReason === self::FLAG_WITH_NOTE) {
            $this->showNoteField = true;
        } else {
            $this->showNoteField = false;
            $this->reset('note');
        }

        $this->selectedReason = $selectedReason;
    }

    public function updateFlagData(): void
    {
        $this->setIconFilename();
        $this->setTitleText();
    }

    public function store(): void
    {
        //        $rules = (new StoreFlagRequest())->rules();

        //        $this->validate($rules);

        $selectedReason = mb_trim($this->selectedReason);

        try {
            if ($selectedReason === self::FLAG_WITH_NOTE && mb_strlen($this->note) > 0) {
                $this->metadata = ['note' => $this->note];
            }

            Flag::add($this->model, auth()->user(), $selectedReason, $this->metadata);

            $this->showForm = false;

            $this->updateFlagData();

            $this->dispatch(LivewireEventEnum::CommentFlagged->value);
        } catch (InvalidMarkValueException $exception) {
            $this->logError($exception);
        }
    }

    public function delete(): void
    {
        try {
            Flag::remove($this->model, auth()->user());

            $this->updateFlagData();

            $this->userFlagged = false;
        } catch (Exception $exception) {
            $this->logError($exception);
        }
    }

    public function toggleForm(): void
    {
        $this->showForm = !$this->showForm;
    }

    private function setIconFilename(): void
    {
        $this->iconFilename = $this->userFlagged ? 'flag-fill' : 'flag';
    }

    private function getType(): string
    {
        $class = mb_strtolower($this->model::class);

        return str_replace(search: self::MODEL_PATH, replace: '', subject: $class);
    }

    private function setTitleText(): void
    {
        $type = $this->getType();

        $flagText = 'Flag this ' . $type;

        $this->titleText = $this->userFlagged ? trans('Remove flag') : trans($flagText);
    }
}
