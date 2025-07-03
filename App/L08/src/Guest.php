<?php

namespace App\L08\src;

require __DIR__ . '/../../../vendor/autoload.php';

class Guest
{
    public function getName()
    {
        return 'Guest';
    }

    // BEGIN (write your solution here)
    public function getGreeting(): string
    {
        return 'Nice to meet you Guest!';
    }
    // END
}
