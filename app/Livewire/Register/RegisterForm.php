<?php

declare(strict_types=1);

namespace App\Livewire\Register;

use App\Http\Requests\User\StoreUserRequest;
use Livewire\Form;

final class RegisterForm extends Form
{
    protected function rules(): array
    {
        return (new StoreUserRequest())->rules();
    }
}
