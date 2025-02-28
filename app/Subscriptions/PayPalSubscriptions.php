<?php

declare(strict_types=1);

namespace App\Subscriptions;

use App\Traits\LoggingTrait;
use Exception;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

final class PayPalSubscriptions implements SubscriptionInterface
{
    use LoggingTrait;

    protected PayPalClient $provider;

    public function __construct()
    {
        $this->provider = new PayPalClient();

        try {
            $this->provider->setApiCredentials(config('paypal'));
        } catch (Exception $exception) {
            $this->logError($exception);
        }
    }

    public function create(int $plan_id, int $coupon_user_id, string $method, float $amount = 0): mixed
    {
        // TODO: Implement create() method.
    }

    public function cancel(?string $subscription_id = null): void
    {
        // TODO: Implement cancel() method.
    }

    public function pause(): void
    {
        // TODO: Implement pause() method.
    }

    public function resume(): void
    {
        // TODO: Implement resume() method.
    }
}

// https://medium.com/@haziqali516/simplifying-paypal-subscriptions-with-laravel-a-practical-guide-106be0755f32
