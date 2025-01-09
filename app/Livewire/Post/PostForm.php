<?php

declare(strict_types=1);

namespace App\Livewire\Post\Forms;

use App\Http\Requests\Post\StoreMetaFilterPostRequest;
use Livewire\Form;

final class PostForm extends Form
{
    protected function rules(): array
    {
        return (new StoreMetaFilterPostRequest())->rules();
    }
}
