<?php

namespace App\L07\src;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
class fakeSubscription
{
    private $bool;

    function __construct($bool)
    {
        $this->bool = $bool;
    }

    public function hasProfessionalAccess()
    {
        return $this->bool;
    }

    public function hasPremiumAccess()
    {
        return $this->bool;
    }
}
// END
