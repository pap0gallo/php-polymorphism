<?php

namespace App\L06\src\swapKeyValue;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
use App\L06\src\InMemoryKV;

function swapKeyValue(InMemoryKV $obj): void
{
    $startArray = $obj->toArray();

    foreach ($startArray as $key => $value) {
        $obj->unset($key);
    }
    foreach ($startArray as $key => $value) {
        $obj->set($value, $key);
    }
}
// END

$map = new InMemoryKV(['key' => 10]);

$map->set('key2', 'value2');

swapKeyValue($map);

var_dump($map->get(10));