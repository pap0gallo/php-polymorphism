<?php

namespace App\L17\src;

require __DIR__ . '/../../../vendor/autoload.php';

class Logger implements LoggerInterface
{
    public function info($message)
    {
        echo $message;
    }
}
