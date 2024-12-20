<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;

test('email verification screen can be rendered', function () {
    // Arrange
    $user = User::factory()->unverified()->create();

    // Act
    $response = $this->actingAs($user)->get(config('app.testUrl') . '/verify-email');

    // Assert
    $response->assertOk();
});

test('email can be verified', function () {
    // Arrange
    $user = User::factory()->unverified()->create();

    Event::fake();

    $data = [
        'id' => $user->id,
        'hash' => sha1($user->email),
    ];

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        $data,
    );

    // Act
    $response = $this->actingAs($user)->get($verificationUrl);

    // Assert
    Event::assertDispatched(Verified::class);

    expect($user->fresh()->hasVerifiedEmail())->toBeTrue();

    $response->assertRedirect(route(RouteNameEnum::MetaFilterPostIndex->value, absolute: false) . '?verified=1');
});

test('email is not verified with invalid hash', function () {
    // Arrange
    $user = User::factory()->unverified()->create();

    $data = [
        'id' => $user->id,
        'hash' => sha1('wrong-email'),
    ];

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        $data,
    );

    // Act
    $this->actingAs($user)->get($verificationUrl);

    // Assert
    expect($user->fresh()->hasVerifiedEmail())->toBeFalse();
});
