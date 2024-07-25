<?php

declare(strict_types=1);

namespace App\Livewire\Post\Forms;

use App\Http\Requests\Post\StorePostCommentRequest;
use Livewire\Form;

final class PostCommentForm extends Form
{
    protected function rules(): array
    {
        return (new StorePostCommentRequest())->rules();
    }
}
