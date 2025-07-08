<?php

namespace App\L15\src;

require __DIR__ . '/../../../vendor/autoload.php';

class TcpConnection implements TcpConnectionInterface
{
    private $ip;
    private $port;
    private $state;

    // BEGIN (write your solution here)
    public function __construct($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->state = new states\Disconnected();
    }


    public function getCurrentState()
    {
        return $this->state->getCurrentState();
    }

    public function connect()
    {
        if ($this->getCurrentState() === 'connected') {
            throw new \Exception("Already connected");
        }

        $this->state = new states\Connected();
    }

    public function disconnect()
    {
        if ($this->getCurrentState() === 'disconnected') {
            throw new \Exception("Already disconnected");
        }

        $this->state = new states\Disconnected();
    }

    public function write($data)
    {
        if ($this->getCurrentState() === 'disconnected') {
            throw new \Exception("Cannot write while disconnected");
        }
    }
    // END
}
