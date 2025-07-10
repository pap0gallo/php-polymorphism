<?php

namespace App\L17\src;

require __DIR__ . '/../../../vendor/autoload.php';

class Application
{
    public $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        $this->logger->info('The application has been started!');
    }
}
