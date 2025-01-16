<?php

declare(strict_types=1);

namespace App\Livewire\Posts;

use App\Http\Requests\Post\StoreMetaFilterPostRequest;
use Livewire\Form;

final class PostForm extends Form
{
    protected function rules(): array
    {
        return (new StoreMetaFilterPostRequest())->rules();
    }
}
