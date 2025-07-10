<?php

namespace App\L15\src\Main;

require __DIR__ . '/../../../vendor/autoload.php';

use App\Logger;
use App\Application;
use App\LoggerInterface;

function buildApplication()
{
    // BEGIN (write your solution here)

    $container = new \DI\Container();
    $container->set(\App\L17\src\LoggerInterface::class, \DI\autowire(\App\L17\src\Logger::class));
    $container->set(\App\L17\src\Application::class, \DI\autowire(\App\L17\src\Application::class));

    $app = $container->get(\App\L17\src\Application::class);

    return $app->run();
    // END
}


echo(buildApplication());