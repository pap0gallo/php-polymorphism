<?php

namespace App\L08\src\Helpers;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L08\src\Guest;
use App\L08\src\User;

// BEGIN (write your solution here)
function getGreeting(object $user)
{
    return $user->getGreeting();
}
// END

$guest = new Guest();

$user = new User('Petr');

print_r(getGreeting($guest));

//print_r(getGreeting($user));