<?php

declare(strict_types=1);

namespace App\Livewire\Comments;

use App\Livewire\Forms\CommentForm;
use App\Traits\AuthStatusTrait;
use Livewire\Component;

final class CommentCreate extends Component
{
    // https://livewire.laravel.com/docs/forms
    // https://dev.to/codeanddeploy/laravel-9-update-an-existing-model-2cfa
    // https://medium.com/@olumayokunolayinka/laravel-livewire-create-and-update-operations-a-refined-approach-56573d5fd5fa
    // https://laraveldaily.com/lesson/livewire-3/edit-product-form-object

    public CommentForm $form;

    public int $parentId = 0;
    public int $userId = 0;

    public function mount(
        int $parentId,
        int $userId,
    ): void
    {
        $this->parentId = $parentId;
        $this->userId = $userId;
    }

    public function setComment(): void
    {
        $this->form->postId = $this->postId;
        $this->form->parentId = $this->parentId;
    }

}
