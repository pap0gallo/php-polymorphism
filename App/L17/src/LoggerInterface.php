<?php

namespace App\L17\src;

require __DIR__ . '/../../../vendor/autoload.php';

interface LoggerInterface
{
    public function info(string $message);
}
