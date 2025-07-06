<?php

namespace App\L13\src\parsers;

require __DIR__ . '/../../../../vendor/autoload.php';

// BEGIN (write your solution here)
class JsonParser
{
    public function parse(string $json): array
    {
        return json_decode($json, true);
    }
}
// END
