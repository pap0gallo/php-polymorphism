<?php

namespace App\L10\src;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
interface KeyValueStorageInterface extends \Serializable
{
    public function set($key, $value);
    public function get($key, $default = null);
    public function unset($key);
    public function toArray();
}
// END
