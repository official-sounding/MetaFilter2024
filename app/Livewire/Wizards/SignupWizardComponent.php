<?php

declare(strict_types=1);

namespace App\Livewire\Wizards;

use App\Dtos\UserDto;
use App\Enums\RouteNameEnum;
use App\Enums\UserStateEnum;
use App\Http\Requests\Auth\StorePasswordRequest;
use App\Http\Requests\Signup\StoreEmailAddressRequest;
use App\Http\Requests\Signup\StoreOptionalInfoRequest;
use App\Http\Requests\Signup\StoreUsernameRequest;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

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
    protected UserRepositoryInterface $userRepository;
    protected UserService $userService;

    public function boot(UserRepositoryInterface $userRepository, UserService $userService): void
    {
        $this->user = new User();

        $this->userRepository = $userRepository;
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

        $state = UserStateEnum::Pending->value;

        $this->user = $this->store($state);

        $this->currentStep = 5;
    }

    // Step 5

    public function payWithPayPal(): void
    {
        Log::debug('Pay with PayPal');
        $this->paymentSubmitted();
    }

    public function payWithStipe(): void
    {
        Log::debug('Pay with Stripe');
        $this->paymentSubmitted();
    }

    private function paymentSubmitted(): void
    {
        Log::debug('Payment submitted');
        // Assuming successful payment
        $this->userRepository->updateState($this->user, UserStateEnum::Active->value);

        // TODO: Send verification email
        //        Mail::to()->queue(new SendVerificationEmail());

        $this->redirectRoute(RouteNameEnum::SignupThanks->value);
    }

    public function store(string $state): User
    {
        $dto = new UserDto(
            username: $this->username,
            password: $this->password,
            email: $this->email,
            name: $this->name ?? null,
            homepage_url: $this->homepage_url ?? null,
            state: $state,
        );

        return $this->userService->store($dto);
    }
}
