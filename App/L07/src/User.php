<?php

namespace App\L07\src;

require __DIR__ . '/../../../vendor/autoload.php';

class User
{
    private $currentSubscription;
    private $email;

    public function __construct($email, $currentSubscription = null)
    {
        $this->email = $email;
        // BEGIN (write your solution here)
        is_null($currentSubscription)
            ? $this->currentSubscription = new FakeSubscription($this->isAdmin())
            : $this->currentSubscription = new Subscription($email);
        // END
    }

    public function getCurrentSubscription()
    {
        return $this->currentSubscription;
    }

    public function isAdmin()
    {
        return $this->email === 'rakhim@hexlet.io';
    }
}
