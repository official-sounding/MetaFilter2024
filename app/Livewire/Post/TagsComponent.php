<?php

declare(strict_types=1);

namespace App\Livewire\Post;

use App\Models\BaseModel;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;
use Spatie\Tags\Tag;

final class TagsComponent extends Component
{
    public BaseModel $model;
    public int $iteration = 0;
    public $associatedTags;
    public Collection $allTags;
    public bool $show;

    protected $listeners = [
        'showModal',
        'refreshComponent' => '$refresh',
    ];
    public function mount(): void
    {
        $this->allTags = Tag::all();
    }

    public function render(): View
    {
        return view('livewire.post.tags-component');
    }

    public function showModal($Model, $Id): void
    {
        $this->model = $Model::find($Id);
        $this->associatedTags = $this->model->tags->pluck('name');
        $this->show = true;
        $this->dispatch('refreshDropdown');

    }

    public function saveTags(): void
    {
        try {
            $this->model->syncTags($this->associatedTags);

            $this->dispatch('successAlert', alertMessage: 'Tags saved');
            $this->dispatch('tagUpdated:' . $this->model->{$this->model->getKeyName()});

            $this->show = false;
            $this->allTags = Tag::all();

            $this->iteration++;
        } catch(Exception $exception) {
//            $this->emit('errorAlert', 'Some problem in saving Tags');
        }
    }
}
