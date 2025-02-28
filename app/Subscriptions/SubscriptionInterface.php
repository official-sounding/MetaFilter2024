<?php

declare(strict_types=1);

namespace App\Subscriptions;

interface SubscriptionInterface
{
    public function create(int $plan_id, int $coupon_user_id, string $method, float $amount = 0): mixed;
    public function cancel(?string $subscription_id = null): void;
    public function pause(): void;
    public function resume(): void;
}
