<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\User\StoreUserRequest;
use App\Services\UserService;
use App\Traits\StringFormattingTrait;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

final class RegisteredUserController extends BaseAuthController
{
    use StringFormattingTrait;

    public function __construct(
        protected UserService $userService,
    ) {}

    public function create(): View
    {
        return view('auth.register', [
            'title' => __('Register'),
        ]);
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $user = $this->userService->store($request);

        event(new Registered($user));

        Auth::login($user);

        // TODO:: Add a redirect function in the base controller that takes route as a parameter
        return redirect(route(parent::INTENDED_ROUTE_NAME, absolute: false));
    }
}
