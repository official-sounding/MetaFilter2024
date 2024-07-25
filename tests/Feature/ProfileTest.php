<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\Log;

test('profile page is displayed', function () {
    // Arrange
    $user = User::factory()->create();

    // Act
    $response = $this
        ->actingAs($user)
        ->get('/profile');

    // Assert
    $response->assertOk();
});

test('user can update own profile', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'name' => 'Test User',
        'email' => 'test@example.com',
    ];

    // Act
    $response = $this
        ->actingAs($user)
        ->patch('/profile', $data);

    // Assert
    try {
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');
    } catch (JsonException $exception) {
        Log::error($exception->getMessage());
    }

    $user->refresh();

    if (isset($user->name)) {
        $this->assertSame('Test User', $user->name);
    }

    if (isset($user->email)) {
        $this->assertSame('test@example.com', $user->email);
    }

    $this->assertNull($user->email_verified_at);
});

test('email verification status is unchanged when the email address is unchanged', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'name' => 'Test User',
        'email' => $user->email ?? null,
    ];

    // Act
    $response = $this
        ->actingAs($user)
        ->patch('/profile', $data);

    // Assert
    try {
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');
    } catch (JsonException $exception) {
        Log::error($exception->getMessage());
    }

    $this->assertNotNull($user->refresh()->email_verified_at);
});

test('user can delete their account', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'password' => 'password',
    ];

    // Act
    $response = $this
        ->actingAs($user)
        ->delete('/profile', $data);

    // Assert
    try {
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/');
    } catch (JsonException $exception) {
        Log::error($exception->getMessage());
    }

    $this->assertGuest();
    $this->assertNull($user->fresh());
});

test('correct password must be provided to delete account', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'password' => 'wrong-password',
    ];

    // Act
    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->delete('/profile', $data);

    // Assert
    $response
        ->assertSessionHasErrorsIn('userDeletion', 'password')
        ->assertRedirect('/profile');

    $this->assertNotNull($user->fresh());
});
