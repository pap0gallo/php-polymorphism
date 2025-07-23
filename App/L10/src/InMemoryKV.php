<?php

namespace App\L10\src;

require __DIR__ . '/../../../vendor/autoload.php';

class InMemoryKV implements KeyValueStorageInterface
{
    private $map;

    public function __construct($initial = [])
    {
        $this->map = $initial;
    }

    public function set($key, $value)
    {
        $this->map[$key] = $value;
    }

    public function unset($key)
    {
        unset($this->map[$key]);
    }

    public function get($key, $default = null)
    {
        return $this->map[$key] ?? $default;
    }

    public function toArray()
    {
        return $this->map;
    }

    public function __serialize()
    {
    }
    public function __unserialize($data)
    {
    }

    // BEGIN (write your solution here)
    public function serialize()
    {
        return json_encode($this->map);
    }

    public function unserialize(string $data)
    {
        $this->map = json_decode($data, true);
    }
    // END
}
