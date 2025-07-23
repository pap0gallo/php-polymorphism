<?php

namespace App\L17\src\Main;

require __DIR__ . '/../../../vendor/autoload.php';

use App\Logger;
use App\Application;
use App\LoggerInterface;


function buildApplication()
{
    $container = new \DI\Container();

    $container->set(LoggerInterface::class, \DI\autowire(Logger::class));

    return $container->get(Application::class);
}


echo(buildApplication());