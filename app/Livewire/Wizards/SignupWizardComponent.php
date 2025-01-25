<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Dtos\UserDto;
use App\Enums\RouteNameEnum;
use App\Http\Requests\Auth\StorePasswordRequest;
use App\Http\Requests\Signup\StoreEmailAddressRequest;
use App\Http\Requests\Signup\StoreOptionalInfoRequest;
use App\Http\Requests\Signup\StoreUsernameRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\View\View;

final class SignupWizardComponent extends BaseWizardComponent
{
    public string $username;
    public string $password;
    public string $password_confirmation;
    public string $email;
    public string $name;
    public string $homepage_url;

    public array $steps = [
        'Username',
        'Password',
        'Email Address',
        'Optional Info',
        'Payment',
    ];

    protected User $user;
    protected UserService $userService;

    public function boot(UserService $userService): void
    {
        $this->userService = $userService;
    }

    public function render(): View
    {
        return view('livewire.wizards.signup.signup-wizard-component');
    }

    // Step 1
    public function submitUsername(): void
    {
        $rules = (new StoreUsernameRequest())->rules();

        $this->validate($rules);

        $this->currentStep = 2;
    }

    // Step 2
    public function submitPassword(): void
    {
        $rules = (new StorePasswordRequest())->rules();

        $this->validate($rules);

        $this->currentStep = 3;
    }

    // Step 3
    public function submitEmailAddress(): void
    {
        $rules = (new StoreEmailAddressRequest())->rules();

        $this->validate($rules);

        $this->currentStep = 4;
    }

    // Step 4
    public function submitOptionalInfo(): void
    {
        $rules = (new StoreOptionalInfoRequest())->rules();

        $this->validate($rules);

        $this->user = $this->storeUser();

        $this->currentStep = 5;
    }

    // Step 5
    public function submitPayment(string $method): void
    {
        // TODO: Send validation email

        $this->redirectRoute(RouteNameEnum::SignupThanks);
    }

    public function storeUser(): User
    {
        $dto = new UserDto(
            username: $this->username,
            password: $this->password,
            email: $this->password_confirmation,
            name: $this->name ?? null,
            homepage_url: $this->homepage_url ?? null
        );

        return $this->userService->store($dto);
    }
}
