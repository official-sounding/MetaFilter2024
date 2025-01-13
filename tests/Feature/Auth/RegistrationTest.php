<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

test('registration screen can be rendered', function () {
    $response = $this->get(config('app.testUrl') . '/signup');

    $response->assertOk();
});

test('new users can signup', function () {
    // Arrange
    $data = [
        [
            'name' => 'Test User',
            'username' => 'test-user',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ],
    ];

    // Act
    $response = $this->post(config('app.testUrl') . '/signup', $data);

    // Assert
    $this->assertAuthenticated();

    $response->assertRedirect(route(RouteNameEnum::MetaFilterPostIndex, absolute: false));
});
