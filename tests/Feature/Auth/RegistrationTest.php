<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertOk();
});

test('new users can register', function () {
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
    $response = $this->post('/register', $data);

    // Assert
    $this->assertAuthenticated();

    $response->assertRedirect(route(RouteNameEnum::METAFILTER_POST_INDEX->value, absolute: false));
});
