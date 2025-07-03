<?php

namespace App\L07\src\testFunc;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L07\src\Subscription;
use App\L07\src\User;

$user = new User('vasya@email.com', new Subscription('premium'));

var_dump($user->getCurrentSubscription()->hasProfessionalAccess());