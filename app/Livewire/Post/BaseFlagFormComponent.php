<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Http\Requests\Flag\StoreFlagRequest;
use App\Traits\FlagFormTrait;
use App\Traits\LoggingTrait;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class BaseFlagFormComponent extends Component
{
    use FlagFormTrait;
    use LoggingTrait;

    public array $flagReasons;
    public string $flagFormId;
    public string $type;

    protected const string BASE_FLAG_FORM = 'flag-form';

    protected function rules(): array
    {
        return (new StoreFlagRequest())->rules();
    }

    public function render(): View
    {
        return view('livewire.post.flag-form-component')->with([
            'type' => $this->type,
        ]);
    }
}
