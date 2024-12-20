<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

test('password can be updated', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'current_password' => 'password',
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ];

    // Act
    $response = $this
        ->actingAs($user)
        ->from(config('app.testUrl') . '/profile')
        ->put(config('app.testUrl') . '/password', $data);

    // Assert
    try {
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect(config('app.testUrl') . '/profile');
    } catch (JsonException $exception) {
        Log::error($exception->getMessage());
    }

    $this->assertTrue(Hash::check('new-password', $user->refresh()->password));
});

test('correct password must be provided to update password', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'current_password' => 'wrong-password',
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ];

    // Act
    $response = $this
        ->actingAs($user)
        ->from(config('app.testUrl') . '/profile')
        ->put(config('app.testUrl') . '/password', $data);

    $response
        ->assertSessionHasErrorsIn('updatePassword', 'current_password')
        ->assertRedirect(config('app.testUrl') . '/profile');
});
