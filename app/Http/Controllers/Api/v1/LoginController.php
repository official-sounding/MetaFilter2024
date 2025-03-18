<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

final class LoginController extends BaseApiController
{
    public function login(LoginRequest $request): JsonResponse
    {
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            $message = 'Login successful';

            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            $data = [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user_id' => $user->id,
            ];

            return $this->sendResponse($message, $data);
        } else {
            return $this->sendError(
                error: 'Unauthorised.',
                errorMessages: ['message' => 'The provided credentials are incorrect.']
            );
        }
    }
}
