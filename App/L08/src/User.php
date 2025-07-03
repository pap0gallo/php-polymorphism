<?php

namespace App\L08\src;

require __DIR__ . '/../../../vendor/autoload.php';

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    // BEGIN (write your solution here)
    public function getGreeting(): string
    {
        return "Hello {$this->name}!";
    }
    // END
}
