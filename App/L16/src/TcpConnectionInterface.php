<?php

namespace App\L15\src;

require __DIR__ . '/../../../vendor/autoload.php';

interface TcpConnectionInterface
{
    public function __construct($ip, $port);
    public function getCurrentState();
    public function connect();
    public function disconnect();
    public function write($data);
}
