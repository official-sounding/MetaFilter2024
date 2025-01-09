<?php

declare(strict_types=1);

namespace App\Subscriptions;

interface SubscriptionsInterface
{
    public function create(int $plan_id, int $coupon_user_id, string $method, float $amount = 0);
    public function cancel(string $subscription_id = null);
    public function pause();
    public function resume();
}
