<?php

namespace App\L15\src\states;

require __DIR__ . '/../../../../vendor/autoload.php';

class Disconnected
{
    // BEGIN (write your solution here)
    public function getCurrentState(): string
    {
        return 'disconnected';
    }
    // END
}
