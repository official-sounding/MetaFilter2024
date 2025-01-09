<?php

declare(strict_types=1);

namespace App\Livewire\Tags;

use App\Models\BaseModel;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Tags\Tag;
use Stringable;

class BaseTagComponent
{
    public BaseModel $model;
    public string $className;
    public Stringable $urlSuffix;
    public $associatedTags;
    public Collection $allTags;
    public $show;
    public int $iteration = 0;

    public $readonly = false;

    protected function getListeners(): array
    {
        return [
            'tagUpdated:' . $this->model->{$this->model->getKeyName()} => 'tagUpdated',
        ];
    }

    protected $listeners = [
        'showModal',
        'refreshComponent' => '$refresh',
    ];

    public function mount(): void
    {
        $this->allTags = Tag::all();

        $this->urlSuffix = Str::of(Str::plural(class_basename(get_class($this->model))))->lower();

        $this->className = str_replace('\\', '\\\\', get_class($this->model));

        $this->refreshTags();
    }

    public function refreshTags(): void
    {
        $this->associatedTags = $this->model->tags->pluck('name');
    }

    public function tagUpdated(): void
    {
        $this->refreshTags();
    }

    public function removeTag($tag): void
    {
        $this->model->detachTag($tag);
        $this->dispatch('successAlert', alertMessage: 'Tag Removed');
        $this->dispatch('tagUpdated:' . $this->model->{$this->model->getKeyName()});
    }

    public function showModal($model, $id): void
    {
        $this->model = $model::find($id);
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
        } catch (Exception $exception) {
            $this->emit('errorAlert', 'Some problem in saving Tags');
        }
    }
}
