<?php

namespace App\L13\src\parsers;

require __DIR__ . '/../../../../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

// BEGIN (write your solution here)
class YamlParser
{
    public function parse(string $data): array
    {
        return Yaml::parse($data);
    }
}
// END
