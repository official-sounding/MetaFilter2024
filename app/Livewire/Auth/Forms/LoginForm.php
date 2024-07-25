<?php

declare(strict_types=1);

namespace App\Livewire\Auth\Forms;

use App\Http\Requests\Auth\LoginRequest;
use Livewire\Form;

final class LoginForm extends Form
{
    protected function rules(): array
    {
        return (new LoginRequest())->rules();
    }
}
