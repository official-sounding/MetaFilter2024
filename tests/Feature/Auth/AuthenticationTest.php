<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Models\User;

test('login screen can be rendered', function () {
    // Act
    $response = $this->get('/login');

    // Assert
    $response->assertOk();
});

test('users can authenticate using the login screen', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'email' => $user->email ?? null,
        'password' => 'password',
    ];

    // Act
    $response = $this->post('/login', $data);

    // Assert
    $this->assertAuthenticated();

    $response->assertRedirect(route(RouteNameEnum::MetaFilterPostIndex->value, absolute: false));
});

test('users cannot authenticate with invalid password', function () {
    // Arrange
    $user = User::factory()->create();

    $data = [
        'email' => $user->email ?? null,
        'password' => 'wrong-password',
    ];

    // Act
    $this->post('/login', $data);

    // Assert
    $this->assertGuest();
});

test('users can logout', function () {
    // Arrange
    $user = User::factory()->create();

    // Act
    $response = $this->actingAs($user)->post('/logout');

    // Assert
    $this->assertGuest();

    $response->assertRedirect('/');
});
