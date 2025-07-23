<?php

namespace App\L07\src;

require __DIR__ . '/../../../vendor/autoload.php';

class Subscription
{
    public string $subscriptionPlanName;

    public function __construct(string $subscriptionPlanName)
    {
        $this->subscriptionPlanName = mb_strtolower($subscriptionPlanName);
    }
    public function hasProfessionalAccess(): bool
    {
        return $this->subscriptionPlanName === 'professional';
    }

    public function hasPremiumAccess(): bool
    {
        return $this->subscriptionPlanName === 'premium';
    }
}
