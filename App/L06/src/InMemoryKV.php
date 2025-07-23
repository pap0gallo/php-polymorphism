<?php

namespace App\L06\src;

require __DIR__ . '/../../../vendor/autoload.php';
// BEGIN (write your solution here)
class InMemoryKV
{
    private $array;

    public function __construct($db)
    {
        $this->array = $db;
    }

    public function set($key, $value)
    {
        $this->array[$key] = $value;
    }

    public function unset($key)
    {
        unset($this->array[$key]);
    }

    public function get($key, $defaultValue = null)
    {
        if (!array_key_exists($key, $this->array)) {
            return $defaultValue;
        }
        return $this->array[$key];
    }

    public function toArray(): ?array
    {
        return $this->array;
    }
}
// END
