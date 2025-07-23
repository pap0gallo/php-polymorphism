<?php

namespace App\L07\src\testFunc;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L07\src\Subscription;
use App\L07\src\User;

$user = new User('vasya@email.com', new Subscription('premium'));
$user2 = new User('rakhim@hexlet.io');

var_dump($user2->getCurrentSubscription()->hasProfessionalAccess());